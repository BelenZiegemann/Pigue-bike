<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\stay;

class StaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stay = new stay();
        $stay->name = "Hotel Mulehue";
        $stay->address = "Urquiza y España";
        $stay->lat = "-37.6059853386914";
        $stay->lng = "-62.407988846036915";
        $stay->phone = "2923-406900";
        $stay->image = "mulehue.jpg";
        $stay->email = "recepcion.mulehue@gmail.com";
        $stay->web = "www.mulehue.com.ar";
        $stay->save(); 

        $stay = new stay();
        $stay->name = "Apart Hotel La Cumbre";
        $stay->address = "Rotonda ruta 33";
        $stay->lat = "-37.590929567397076";
        $stay->lng = "-62.42019914148501";
        $stay->phone = "2923-584870";
        $stay->image = "mulehue.jpg";
        $stay->email = "info@lacumbreaparthotel.com.ar";
        $stay->web = "";
        $stay->save();


        $stay = new stay();
        $stay->name = "Parque Hotel Pigue";
        $stay->address = "Avenida Rastreador Fournier 257";
        $stay->lat = "-37.60243817846397";
        $stay->lng = "-62.4152197317035";
        $stay->phone = "2923-406668";
        $stay->image = "mulehue.jpg";
        $stay->email = "parquehotelpigue@hotmail.com";
        $stay->web = "www.parquehotelpigue.com.ar";
        $stay->save();  

        $stay = new stay();
        $stay->name = "Hotel y Cabañas Robles";
        $stay->address = "Ruta Nacional 33 km 133";
        $stay->lat = " -37.5954667601903";
        $stay->lng = "-62.41863417403092";
        $stay->phone = "2923-472632";
        $stay->image = "mulehue.jpg";
        $stay->email = "";
        $stay->web = "";
        $stay->save();
 

        $stay = new stay();
        $stay->name = "Posada la Querencia";
        $stay->address = "Urquiza 566";
        $stay->lat = "-37.60738189202045";
        $stay->lng = "-62.40409157403047";
        $stay->phone = "2923-402098";
        $stay->image = "mulehue.jpg";
        $stay->email = "laquerenciapigue@hotmail.com";
        $stay->web = "";
        $stay->save();  

        $stay = new stay();
        $stay->name = "Hotel Central";
        $stay->address = "San Martin y Belgrano";
        $stay->lat = " -37.6029758799961";
        $stay->lng = "-62.40783662984857";
        $stay->phone = "2923-473140";
        $stay->image = "mulehue.jpg";
        $stay->email = "";
        $stay->web = "";
        $stay->save(); 
    }
}
