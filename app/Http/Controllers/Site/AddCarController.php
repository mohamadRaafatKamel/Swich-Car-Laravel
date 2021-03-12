<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Image;
use App\Models\User;

class AddCarController extends Controller
{
    public function addcar()
    {
        $car = new Car();
        $carID = $car->userHaveCarNotFinish();
        session(['CarNotFinish' => $carID ]);
        $images = Media::select()->where('car_id',$carID)->get();
        return view('front.addcar.image',compact('images'));
    }

    public function image(Request $request)
    {
        try {
            $car = Car::select()->where('user_id',session('LoggedUser'))->first();
            $carId = $car->id;
            $images = $request->image;
            foreach ($images as $image){
                $imageName = "car_".$carId.time().$image->getClientOriginalName();
                $image->move('public/carImage',$imageName);
                $post = new Media();
                $post->car_id = $carId;
                $post->type = "image";
                $post->path = 'public/carImage/'.$imageName;
                $post->save();
            }
            return redirect()->route('addCar.image');

        }catch (\Exception $ex){
            return redirect()->route('addCar.image')->with(['error'=>'توجد مشكله اعد المحاوله']);
        }
    }

    public function imageDestroy($id)
    {
        $image = Media::find($id);
        if($image){
            $image->delete();
        }
        return redirect()->route('addCar.image');
    }

    public function imagePrime($id)
    {
        $image = Media::find($id);
        if($image){
            $image->resetNotes($image->car_id);
            $image->setPrime($id);
        }
        return redirect()->route('addCar.image');
    }

    public function brand()
    {
        $brands = Brand::select()->active()->get();
        return view('front.addCar.brand',compact('brands'));
    }

    public function setBrand()
    {
        try {
            if(isset($_GET['id'])){
                $brandID = $_GET['id'];
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['brand_id'=> $brandID ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }

    }

}
