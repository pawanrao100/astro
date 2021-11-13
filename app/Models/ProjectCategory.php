<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $fillable = [
    	'language_id',
        'name',
        'icon_photo_id',
    ];
    public function photo(){
        return $this->belongsTo('App\Models\Photo', 'photo_id');
    }
}
