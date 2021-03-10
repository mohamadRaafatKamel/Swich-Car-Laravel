<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'image', 'state', 'updated_at','created_at'
    ];

    public function scopeActive($query){
        return $query -> where('state',1);
    }

    public function  scopeSelection($query){

        return $query -> select('id', 'name', 'image', 'state', 'updated_at','created_at');
    }

    public function getActive(){
        return   $this -> state == 1 ? 'مفعل'  : 'غير مفعل';
    }

}
