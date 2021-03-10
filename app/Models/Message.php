<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'message';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'car_id', 'chat_id', 'text', 'image', 'updated_at','created_at'
    ];

    public function  scopeSelection($query){

        return $query -> select('id', 'car_id', 'chat_id', 'text', 'image', 'updated_at','created_at');
    }

}
