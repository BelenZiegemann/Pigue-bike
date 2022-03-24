<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new category();
        $category->name = "Damas A";
        $category->description = "Clases 83 a 92";
        $category->save();

        $category = new category();
        $category->name = "Damas B";
        $category->description = "Clases 73 a 82";
        $category->save();

        $category = new category();
        $category->name = "Damas C";
        $category->description = "Clases 63 a 72";
        $category->save();

        $category = new category();
        $category->name = "Sub 18";
        $category->description = "Clases 03 a 04";
        $category->save();

        $category = new category();
        $category->name = "Elite";
        $category->description = "Clases 93 a 99";
        $category->save();

        $category = new category();
        $category->name = "Master A";
        $category->description = "Clases 83 a 92";
        $category->save();

        $category = new category();
        $category->name = "Master B";
        $category->description = "Clases 73 a 82";
        $category->save();

        $category = new category();
        $category->name = "Master C";
        $category->description = "Clases 63 a 72";
        $category->save();

        $category = new category();
        $category->name = "Master D";
        $category->description = "Clases 53 a 62";
        $category->save();
    }
}
