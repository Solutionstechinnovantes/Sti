<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';

    protected $fillable = [
        'axea',
        'axeb',
        'axec',
        'axed',
        'titlea',
        'titleb',
        'titlec',
        'titled',
        'subtitlea',
        'subtitleb',
        'subtitlec',
        'subtitled',
        'descriptiona',
        'descriptionb',
        'descriptionc',
        'descriptiond',
        'icon_imagea',
        'icon_imageb',
        'icon_imagec',
        'icon_imaged',
    ];
}
