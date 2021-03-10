<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMember extends Model
{
    use HasFactory;

    protected $table = 'chat_member';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'car_id', 'chat_id', 'updated_at','created_at'
    ];

    public function  scopeSelection($query){

        return $query -> select('id', 'car_id', 'chat_id', 'updated_at','created_at');
    }

}
