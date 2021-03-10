<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConnectUs extends Model
{
    use HasFactory;

    protected $table = 'connect_us';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'phone', 'message', 'state', 'updated_at','created_at'
    ];

    public function scopeActive($query){
        return $query -> where('state',1);
    }

    public function  scopeSelection($query){

        return $query -> select('id', 'phone', 'message', 'state', 'updated_at','created_at');
    }

    public function getActive(){
        return   $this -> state == 1 ? 'مفعل'  : 'غير مفعل';
    }

}
