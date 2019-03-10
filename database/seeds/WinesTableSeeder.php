<?php

use App\Wine;
use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wine::create([
            'name' => 'Classic Chianti',
            'description' => 'A medium-bodied wine characterized by a marvelous freshness with a lingering, fruity finish',
            'color' => 'red',
            'grape_variety' => 'Sangiovese',
            'country' => 'Italy'
        ]);

        Wine::create([
            'name' => 'Bordeaux',
            'description' => 'A wine with fruit scents and flavors of blackberry, dark cherry, vanilla, coffee bean, and licorice. The wines are often concentrated, powerful, firm and tannic',
            'color' => 'red',
            'grape_variety' => 'Merlot',
            'country' => 'France'
        ]);

        Wine::create([
            'name' => 'White Zinfandel',
            'description' => 'Often abbreviated as White Zin, it is a dry to sweet wine, pink-colored rosé',
            'color' => 'rosé',
            'grape_variety' => 'Zinfandel',
            'country' => 'USA'
        ]);

        Wine::create([
            'name' => 'Port',
            'description' => 'A fortified sweet red wine, often served as a dessert wine',
            'color' => 'red',
            'grape_variety' => 'Touriga Nacional',
            'country' => 'Portugal'
        ]);

        Wine::create([
            'name' => 'Prosecco',
            'description' => 'It is a dry white wine (brut) sometimes with a sweet flavor of green apple, honeydew melon, pear, and honeysuckle',
            'color' => 'white',
            'grape_variety' => 'Glera',
            'country' => 'Italy'
        ]);
    }
}