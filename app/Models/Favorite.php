<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorite';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'car_id', 'updated_at','created_at'
    ];

    public function  scopeSelection($query){

        return $query -> select('id', 'user_id', 'car_id', 'updated_at','created_at');
    }


}
