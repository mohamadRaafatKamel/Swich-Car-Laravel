<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'car_id', 'state', 'updated_at','created_at'
    ];

    public function  scopeSelection($query){

        return $query -> select('id', 'name', 'state', 'updated_at','created_at');
    }

    public function scopeActive($query){
        return $query -> where('state',1);
    }

    public function getActive(){
        return   $this -> state == 1 ? 'مفعل'  : 'غير مفعل';
    }
}
