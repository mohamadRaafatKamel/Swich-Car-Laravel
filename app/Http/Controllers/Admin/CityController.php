<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmarhRequest;
use App\Models\Admin;
use App\Models\Agent;
use App\Models\City;
use App\Models\Emarh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CityController extends Controller
{
    public function index()
    {
        $dates = City::select()->paginate(PAGINATION_COUNT);
        return view('admin.city.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.city.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            City::create($request->except(['_token']));
            return redirect()->route('admin.city')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.city.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $date = City::select()->find($id);
        if(!$date){
            return redirect()->route('admin.city')->with(['error'=>"غير موجود"]);
        }
        return view('admin.city.edit',compact('date'));
    }

    public function update($id, Request $request)
    {
        try {

            $date = City::find($id);
            if (!$date) {
                return redirect()->route('admin.city.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            $date->update($request->except(['_token']));

            return redirect()->route('admin.city')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.city')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $date = City::find($id);
            if (!$date) {
                return redirect()->route('admin.city', $id)->with(['error' => '  غير موجوده']);
            }
            $date->delete();

            return redirect()->route('admin.city')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.city')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
