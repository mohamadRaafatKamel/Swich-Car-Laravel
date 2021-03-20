<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TypeController extends Controller
{
    public function index()
    {
        $dates = Type::select()->paginate(PAGINATION_COUNT);
        return view('admin.type.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            Type::create($request->except(['_token']));
            return redirect()->route('admin.type')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.type.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $date = Type::select()->find($id);
        if(!$date){
            return redirect()->route('admin.type')->with(['error'=>"غير موجود"]);
        }
        return view('admin.type.edit',compact('date'));
    }

    public function update($id, Request $request)
    {
        try {

            $date = Type::find($id);
            if (!$date) {
                return redirect()->route('admin.type.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            $date->update($request->except(['_token']));

            return redirect()->route('admin.type')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.type')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $date = Type::find($id);
            if (!$date) {
                return redirect()->route('admin.type', $id)->with(['error' => '  غير موجوده']);
            }
            $date->delete();

            return redirect()->route('admin.type')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.type')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
