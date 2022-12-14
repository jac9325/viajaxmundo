<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'email',
        'country',
        'date',
        'phone',
        'user',
        'password',
        'status',
        'profile_id'
    ];

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
