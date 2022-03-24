<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\route;

class RouteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return route::all();
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
            'cost' => 'required',
            'description' => 'required',
        ]);

        $route = route::create($request->all());
        return \Response($route);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = route::findOrFail($id);

        return \response($route);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, route $route)
    {
        $rules = [
			'name' => 'required',
            'cost' => 'required',
            'description' => 'required',
		];

		$this->validate($request, $rules);
        $route->fill($request->all());
		$route->save();
        return response()->json([
            'res' => true,
            'message' => 'Recorrido actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        route::destroy($id);
        
        return \response("Recorrido eliminado correctamente");
    }
}
