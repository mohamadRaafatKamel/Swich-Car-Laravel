<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slnder;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SlnderController extends Controller
{
    public function index()
    {
        $dates = Slnder::select()->paginate(PAGINATION_COUNT);
        return view('admin.slnder.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.slnder.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            Slnder::create($request->except(['_token']));
            return redirect()->route('admin.slnder')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.slnder.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $date = Slnder::select()->find($id);
        if(!$date){
            return redirect()->route('admin.slnder')->with(['error'=>"غير موجود"]);
        }
        return view('admin.slnder.edit',compact('date'));
    }

    public function update($id, Request $request)
    {
        try {

            $date = Slnder::find($id);
            if (!$date) {
                return redirect()->route('admin.slnder.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            $date->update($request->except(['_token']));

            return redirect()->route('admin.slnder')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.slnder')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $date = Slnder::find($id);
            if (!$date) {
                return redirect()->route('admin.slnder', $id)->with(['error' => '  غير موجوده']);
            }
            $date->delete();

            return redirect()->route('admin.slnder')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.slnder')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
