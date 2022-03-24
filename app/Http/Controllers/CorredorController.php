<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\corredor;

class CorredorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return corredor::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'DNI' => 'required',
            'Dob' => 'required',
            'email' => 'required',
            'province' => 'required',
            'city' => 'required',
            'category_name' => 'required',
            'route_name' => 'required',
            'payment_id' => 'required',
        ]);

        $registered = corredor::create($request->all());
        return \Response($registered);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registered = corredor::findOrFail($id);

        return \response($registered);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, corredor $registered)
    {
        $registered->fill($request->all());
        $registered->save();

        return \response("El corredor fue actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        corredor::destroy($id);
        
        return \response("El corredor fue eliminado correctamente");
    }
}
