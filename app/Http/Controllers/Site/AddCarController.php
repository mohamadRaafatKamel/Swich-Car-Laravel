<?php

namespace App\Http\Controllers\Site;

use App\Models\Agent;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Media;
use App\Models\Slnder;
use App\Models\Type;
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

    public function type()
    {
        $types = Type::select()->active()->get();
        return view('front.addCar.type',compact('types'));
    }

    public function setType()
    {
        try {
            if(isset($_GET['id'])){
                $typeID = $_GET['id'];
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['type_id'=> $typeID ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function category()
    {
        $datas = Category::select()->active()->get();
        return view('front.addCar.category',compact('datas'));
    }

    public function setCategory()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['cat_id'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function year()
    {
        $datas=['2018','2019','2020'];
        return view('front.addCar.year',compact('datas'));
    }

    public function setYear()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['model'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function city()
    {
        $datas = City::select()->active()->get();
        return view('front.addCar.city',compact('datas'));
    }

    public function setCity()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['city_id'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function elker()
    {
        $datas=['ker1','ker2','ker3'];
        return view('front.addCar.elker',compact('datas'));
    }

    public function setElker()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['elker'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function color()
    {
        $datas = Color::select()->active()->get();
        return view('front.addCar.color',compact('datas'));
    }

    public function setColor()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['color_id'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function agent()
    {
        $datas = Agent::select()->active()->get();
        return view('front.addCar.agent',compact('datas'));
    }

    public function setAgent()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['agent_id'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function slnder()
    {
        $datas = Slnder::select()->active()->get();
        return view('front.addCar.slnder',compact('datas'));
    }

    public function setSlnder()
    {
        try {
            if(isset($_GET['id'])){
                $car = Car::select()->find(session('CarNotFinish'));
                $car->update(['slnder_id'=> $_GET['id'] ]);
                return ['success'=>1];
            }
        }catch (\Exception $ex) {
            return ['error'=>1];
        }
    }

    public function carInfo()
    {
        $car = Car::select()->find(session('CarNotFinish'));
        return view('front.addCar.carinfo',compact('car'));
    }

    public function carInfoSave(Request $request)
    {
        try {
            $car = Car::select()->find(session('CarNotFinish'));
            $car->update([
                'name'=> $request->name,
                'machen'=> $request->machen,
                'body'=> $request->body,
                'fuel'=> $request->fuel,
                'description'=> $request->description,
                'price'=> $request->price,
                'state'=> "1",
            ]);
            return redirect()->route('home');
        }catch (\Exception $ex) {
            return redirect()->route('addCar.info')->with(['error'=>'توجد مشكله اعد المحاوله']);
        }
    }


}
