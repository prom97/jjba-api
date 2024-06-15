<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quotes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Quotes::create([
            'character' => 'Wamuu',
            'desc' => 'Una vida brillante, tan efímera como la burbuja que guarda su legado.',
        ]);
        Quotes::create([
            'character' => 'Stroheim',
            'desc' => 'El valor no consiste en no tener miedo al ponerte en peligro, sino en hacerlo conscientemente por una causa justa.',
        ]);
        Quotes::create([
            'character' => 'Dio Brando',
            'desc' => 'La sociedad succiona el almo de un humano. Es de esta manera que volveré a JoJo un cobarde. Entonces podré tomar todo, ¡cuando crezcamos todo será mio!.',
        ]);
        Quotes::create([
            'character' => 'Weather Report',
            'desc' => 'El tipo de mal que no se da cuenta de que es malo... es el peor que hay.',
        ]);
        Quotes::create([
            'character' => 'Kars',
            'desc' => 'No soy como Wham, no tengo su romanticismo de guerrero, haré lo que sea necesario. Lo único que importa... ¡¡Es ganar!!.',
        ]);
        Quotes::create([
            'character' => 'Jotaro Kujo',
            'desc' => 'Yare Yare Daze.',
        ]);
        Quotes::create([
            'character' => 'Rohan Kishibe',
            'desc' => '¡A mí, Rohan Kishibe, lo que más me gusta es decirle no en la cara a la gente que se cree más poderosa!.',
        ]);
    }
}
