<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Dish;
use App\Models\KitchenType;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Restaurant $restaurant )
    {
        $data = $restaurant->id;

        $dishes = Dish::where('restaurants_id', $data)->get();

        return view( 'admin.dishes.index', compact('dishes', 'data') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant)
    {
        return view('admin.dishes.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store($restaurant, Request $request)
    // {
    //     $data = $request->All();

    //     $dish = new Dish();
    //     $dish->fill($data);
    //     $dish->restaurant_id = Auth::user()->pluck('id')->first();
    //     $dish->save();

    //     if ( array_key_exists( 'categories', $data ) )  $restaurant->RestaurantType()->attach($data['categories']);

    //     return redirect()->route('admin.restaurants.index')->with('message', "Hai creato la nuova attività $restaurant->nome_attivita");
    // }
    public function store($restaurant, Request $request)
    {   

        Dish::create($request->all() + ['restaurants_id' => $restaurant]);
        return redirect()->route('admin.restaurants.dishes.index', $restaurant);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant, Dish $dish)
    {
        return view ('admin.dishes.show', compact('dish', 'restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant, Dish $dish)
    {
        return view('admin.dishes.edit', compact('restaurant','dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($restaurant, Request $request, Dish $dish)
    {
        $dish->update($request->all());
        return redirect()->route('admin.restaurants.dishes.index', $restaurant);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant, Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.restaurants.dishes.index', $restaurant)->with('message', 'hai eliminato il piatto selezionato.');
    }
}
