<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BrandController extends Controller
{
    public function index()
    {
        $dates = Brand::select()->paginate(PAGINATION_COUNT);
        return view('admin.brand.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            $image = $request->file('image');
            $imageName = "Brand_".$request->name . ".". $image->extension();
            $image->move(public_path('brand'),$imageName);
            Brand::create(array_merge($request->except(['_token']),['image' => "public/brand/".$imageName]));
            return redirect()->route('admin.brand')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.brand.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $date = Brand::select()->find($id);
        if(!$date){
            return redirect()->route('admin.brand')->with(['error'=>"غير موجود"]);
        }
        return view('admin.brand.edit',compact('date'));
    }

    public function update($id, Request $request)
    {
        try {

            $date = Brand::find($id);
            if (!$date) {
                return redirect()->route('admin.brand.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('state'))
                $request->request->add(['state' => 0]);

            if ($request->has('image')){
                $image = $request->file('image');
                $imageName = "Brand_".$request->name . ".". $image->extension();
                $image->move(public_path('brand'),$imageName);
                $imgPath = "public/category/".$imageName;
            }else{
                $imgPath = $date->image;
            }

            $date->update(array_merge($request->except('_token'),['image' => $imgPath ]));

            return redirect()->route('admin.brand')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brand')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $date = Brand::find($id);
            if (!$date) {
                return redirect()->route('admin.brand', $id)->with(['error' => '  غير موجوده']);
            }
            $date->delete();

            return redirect()->route('admin.brand')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brand')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
