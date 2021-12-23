<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'name',
        'url',
        'description',
        'image',
        'icon',
        'status',

    ];

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }

}
