<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'axea' => 'Valeur de Axe A',
            'axeb' => 'Valeur de Axe B',
            'axec' => 'Valeur de Axe C',
            'axed' => 'Valeur de Axe D',
            'titlea' => 'Titre pour Axe A',
            'titleb' => 'Titre pour Axe B',
            'titlec' => 'Titre pour Axe C',
            'titled' => 'Titre pour Axe D',
            'subtitlea' => 'Sous-titre pour Axe A',
            'subtitleb' => 'Sous-titre pour Axe B',
            'subtitlec' => 'Sous-titre pour Axe C',
            'subtitled' => 'Sous-titre pour Axe D',
            'descriptiona' => 'Description pour Axe A',
            'descriptionb' => 'Description pour Axe B',
            'descriptionc' => 'Description pour Axe C',
            'descriptiond' => 'Description pour Axe D',
            'icon_imagea' => 'image_a.png',
            'icon_imageb' => 'image_b.png',
            'icon_imagec' => 'image_c.png',
            'icon_imaged' => 'image_d.png',
        ]);
    }
}
