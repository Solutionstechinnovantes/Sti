<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = [
        'name', 
        'description', 
        'logo', 
        'address', 
        'email', 
        'phone', 
        'maps_embed'
    ];
}
