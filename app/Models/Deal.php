<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $table = 'deal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'mycar_id', 'hiscar_id', 'pay_or_take', 'price', 'service', 'state', 'updated_at','created_at'
    ];

    public function scopeActive($query){
        return $query -> where('state',1);
    }

    public function  scopeSelection($query){

        return $query -> select('id', 'mycar_id', 'hiscar_id', 'pay_or_take', 'price', 'service', 'state', 'updated_at','created_at');
    }

    public function getActive(){
        return   $this -> state == 1 ? 'مفعل'  : 'غير مفعل';
    }

}
