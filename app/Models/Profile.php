<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile',
        'line1',
        'line2',
        'city',
        'county',
        'postcode',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
