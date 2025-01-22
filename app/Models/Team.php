<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'tittlea',
        'descriptiona',
        'imagea',
        'fba',
        'twa',
        'ina',
        'linka',
        'gita',
        'tittleb',
        'descriptionb',
        'imageb',
        'fbb',
        'twb',
        'inb',
        'linkb',
        'gitb',
        'tittlec',
        'descriptionc',
        'imagec',
        'fbc',
        'twc',
        'inc',
        'linkc',
        'gitc',
];
}
