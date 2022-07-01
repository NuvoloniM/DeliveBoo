<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\User;
use App\Models\RestaurantType;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = User::where("id", Auth::user()->id)->get();
        $user_id = Auth::user()->pluck('id')->toArray();
        // dd($user_id);
        $restaurants = Restaurant::where('user_id', $user_id )->get();
        // dd($restaurants);
        return view('admin.restaurants.index', compact('restaurants', 'user_id' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = RestaurantType::All();
        return view('admin.restaurants.create', compact ('categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->All();

        $restaurant = new restaurant();
        $restaurant->fill($data);
        $restaurant->user_id = Auth::user()->pluck('id')->first();
        $restaurant->save();

        if ( array_key_exists( 'categories', $data ) )  $restaurant->RestaurantType()->attach($data['categories']);

        return redirect()->route('admin.restaurants.index')->with('message', "Hai creato la nuova attività $restaurant->nome_attivita");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Restaurant $restaurant )
    {
        return view( 'admin.restaurants.show', compact('restaurant') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Restaurant $restaurant )
    {
        $categories = RestaurantType::All();
        return view( 'admin.restaurants.edit', compact('restaurant', 'categories') );
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
