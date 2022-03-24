<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\route;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route = new route();
        $route->name = "Competitiva";
        $route->cost = "2000";
        $route->description = "Vuelta de 68 kilometros.";
        $route->save();

        $route = new route();
        $route->name = "Promocional";
        $route->cost = "1800";
        $route->description = "Vuelta de 30 kilometros";
        $route->save();
    }
}
