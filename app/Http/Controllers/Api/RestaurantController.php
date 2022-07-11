<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\RestaurantType;
use App\Models\Dish;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::with('restaurantType')->get();
        //$restaurants = Restaurant::all();
        $restaurants_types = RestaurantType::all();


        return response()->json(compact('restaurants', 'restaurants_types'));
       
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // mantengo l'$id come variabile per capire cosa mostrare.
        // $post = Post::with('Category', 'tags')->find($id);
        // uso lo slug come parametro  da mostrare nella uri nella sezione front
        $menu = Dish::where('restaurants_id', $id)->with(['kitchenType',])->get();
        // $kitchen_types = KitchenType::all();
        // ritrona pagina errore se non esiste il post
        // if ( !$post ) return response('Post not found', 404);
        return response()->json( $menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
