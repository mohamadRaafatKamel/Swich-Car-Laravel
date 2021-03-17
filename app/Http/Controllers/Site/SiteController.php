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

class SiteController extends Controller
{
    public function home()
    {
        $Brands = Brand::select()->get();
        return view('front.index',compact('Brands'));
    }



}
