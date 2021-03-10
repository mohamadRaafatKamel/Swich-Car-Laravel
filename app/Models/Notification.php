<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notification';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'text', 'type', 'user_id ', 'updated_at','created_at'
    ];

    public function  scopeSelection($query){

        return $query -> select('id', 'text', 'type', 'user_id ', 'updated_at','created_at');
    }

}
