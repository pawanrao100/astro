<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'language_id',
        'icon_photo_id',
    ];
    public function photo(){
        return $this->belongsTo('App\Models\Photo', 'photo_id');
    }
}
