<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protfolio extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'title',
        'details',
        'image',
        'link',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
