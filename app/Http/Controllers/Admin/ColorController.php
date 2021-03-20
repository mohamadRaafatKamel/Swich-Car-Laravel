<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmarhRequest;
use App\Models\Admin;
use App\Models\Agent;
use App\Models\City;
use App\Models\Color;
use App\Models\Emarh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ColorController extends Controller
{
    public function index()
    {
        $dates = Color::select()->paginate(PAGINATION_COUNT);
        return view('admin.color.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.color.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            Color::create($request->except(['_token']));
            return redirect()->route('admin.color')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.color.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $date = Color::select()->find($id);
        if(!$date){
            return redirect()->route('admin.color')->with(['error'=>"غير موجود"]);
        }
        return view('admin.color.edit',compact('date'));
    }

    public function update($id, Request $request)
    {
        try {

            $date = Color::find($id);
            if (!$date) {
                return redirect()->route('admin.color.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            $date->update($request->except(['_token']));

            return redirect()->route('admin.color')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.color')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $date = Color::find($id);
            if (!$date) {
                return redirect()->route('admin.color', $id)->with(['error' => '  غير موجوده']);
            }
            $date->delete();

            return redirect()->route('admin.color')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.color')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
