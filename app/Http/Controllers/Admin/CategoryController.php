<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function index()
    {
        $dates = Category::select()->paginate(PAGINATION_COUNT);
        return view('admin.category.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            Category::create($request->except(['_token']));
            return redirect()->route('admin.category')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.category.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $date = Category::select()->find($id);
        if(!$date){
            return redirect()->route('admin.category')->with(['error'=>"غير موجود"]);
        }
        return view('admin.category.edit',compact('date'));
    }

    public function update($id, Request $request)
    {
        try {

            $date = Category::find($id);
            if (!$date) {
                return redirect()->route('admin.category.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            $date->update($request->except(['_token']));

            return redirect()->route('admin.category')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.category')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $date = Category::find($id);
            if (!$date) {
                return redirect()->route('admin.category', $id)->with(['error' => '  غير موجوده']);
            }
            $date->delete();

            return redirect()->route('admin.category')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.category')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
