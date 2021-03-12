<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'car_id', 'type', 'path', 'notes', 'updated_at','created_at'
    ];

    public function  scopeSelection($query){

        return $query -> select('id', 'car_id', 'type', 'path', 'notes', 'updated_at','created_at');
    }

    public function resetNotes($carId)
    {
        $images = Media::select()->where('car_id',$carId)->get();
        foreach ($images as $image){
            $image->update(['notes' => Null ]);
        }
    }

    public function setPrime($imageId)
    {
        $image = Media::find($imageId);
        if($image){
            $image->update(['notes' => '1' ]);
        }
    }

}
