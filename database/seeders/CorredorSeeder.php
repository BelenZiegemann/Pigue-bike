<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\corredor;

class CorredorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        corredor::truncate();

        $registered = new corredor();
        $registered->name = "Nestor";
        $registered->last_name = "Ziegemann";
        $registered->DNI = "11111111";
        $registered->Dob = "18121964";
        $registered->email = "nestor@bici.com";
        $registered->province = "Buenos Aires";
        $registered->city = "Pigue";
        $registered->category_name= "Elite";
        $registered->route_name= "Competitiva";
        $registered->payment_id = "";
        $registered->save();

        $registered = new corredor();
        $registered->name = "Eduardo";
        $registered->last_name = "Disdel";
        $registered->DNI = "22222222";
        $registered->Dob = "18121964";
        $registered->email = "edu@bici.com";
        $registered->province = "Buenos Aires";
        $registered->city = "Pigue";
        $registered->category_name= "Master C";
        $registered->route_name= "Promocional";
        $registered->payment_id = "";
        $registered->save();

        $registered = new corredor();
        $registered->name = "Tiki";
        $registered->last_name = "Didomenico";
        $registered->DNI = "33333333";
        $registered->Dob = "18121964";
        $registered->email = "tiki@bici.com";
        $registered->province = "Buenos Aires";
        $registered->city = "Pigue";
        $registered->category_name= "Master C";
        $registered->route_name= "Promocional";
        $registered->payment_id = "";
        $registered->save();

        $registered = new corredor();
        $registered->name = "Dario";
        $registered->last_name = "Saavedra";
        $registered->DNI = "44444444";
        $registered->Dob = "18121964";
        $registered->email = "dario@bici.com";
        $registered->province = "Buenos Aires";
        $registered->city = "Pigue";
        $registered->category_name= "Master B";
        $registered->route_name= "Promocional";
        $registered->payment_id = "";
        $registered->save();

        $registered = new corredor();
        $registered->name = "Melo";
        $registered->last_name = "Rodriguez";
        $registered->DNI = "55555555";
        $registered->Dob = "18121964";
        $registered->email = "melo@bici.com";
        $registered->province = "Buenos Aires";
        $registered->city = "Pigue";
        $registered->category_name= "Master B";
        $registered->route_name= "Competitiva";
        $registered->payment_id = "";
        $registered->save();
    }
}
