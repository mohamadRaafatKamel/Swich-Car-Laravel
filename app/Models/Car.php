<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'user_id', 'brand_id', 'type_id', 'cat_id', 'slnder_id', 'model', 'city_id',
        'color_id', 'agent_id', 'elker', 'machen', 'body', 'fuel', 'description', 'price',
        'state', 'updated_at','created_at'
    ];

    public function scopeActive($query){
        return $query -> where('state',1);
    }

    public function  scopeSelection($query){
        return $query -> select(
            'id', 'name', 'user_id', 'brand_id', 'type_id', 'cat_id', 'slnder_id', 'model', 'city_id',
            'color_id', 'agent_id', 'elker', 'machen', 'body', 'fuel', 'description', 'price',
            'state', 'updated_at','created_at'
        );
    }

    public function getActive(){
        return   $this -> state == 1 ? 'مفعل'  : 'غير مفعل';
    }

    public function hasCar()
    {
        $this->count();
    }

    public function userHaveCarNotFinish()
    {
        $cars = Car::select()->where('user_id',session('LoggedUser'))->get();
        if($cars->count()){
            foreach ($cars as $car){
                if($car->state == 0){
                    return $car->id;
                }
            }
        }else{
            // don't have any car
            $car = new Car();
            $car->user_id = session('LoggedUser');
            $car->save();
            return $car->id;
        }
    }

    public function get()
    {
        $this->count();
    }

    public function getUser()
    {
        $data = User::select()->find($this->user_id );
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getBrand()
    {
        $data = Brand::select()->find($this->brand_id  );
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getType()
    {
        $data = Type::select()->find($this->type_id);
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getCategory()
    {
        $data = Category::select()->find($this->cat_id);
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getSlnder()
    {
        $data = Slnder::select()->find($this->slnder_id);
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getCity()
    {
        $data = City::select()->find($this->city_id);
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getColor()
    {
        $data = Color::select()->find($this->color_id);
        if($data)
            return $data->name;
        else
            return "";
    }

    public function getAgent()
    {
        $data = Agent::select()->find($this->agent_id);
        if($data)
            return $data->name;
        else
            return "";
    }

}
