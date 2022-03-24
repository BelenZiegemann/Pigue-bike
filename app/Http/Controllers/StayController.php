<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stay;

class StayController extends Controller
{
     //
    public function index()
    {
        return stay::all();
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'phone' => 'required',
        ]);

        $stay = stay::create($request->all());
        return \Response($stay);
    }

    public function show(stay $stay)
    {
        return $stay;
    }

     public function update(Request $request,stay $stay)
    {
        $rules = [
			'name' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'phone' => 'required',
		];

		$this->validate($request, $rules);
        $stay->fill($request->all());
		$stay->save();
        return response()->json([
            'res' => true,
            'message' => 'Alojamiento actualizado correctamente'
        ], 200);
    }

     public function destroy($id)
    {
        stay::destroy($id);
        
        return \response("Alojamiento fue eliminado correctamente");
    }
}
