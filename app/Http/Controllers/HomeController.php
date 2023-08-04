<?php

namespace App\Http\Controllers;

use App\Models\Delicacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Delicacy::all();
        return view('index')->with('items' , $items);
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
        $cart_item = Delicacy::find($id);
        return view('viewItem')->with('cart_item' , $cart_item);
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

    public function purchase($id)
    {
        $purchased_item = Delicacy::find($id);
        // dd($purchased_item);
        $purchased_item_name = $purchased_item->food_item_name;
        $purchased_item_description = $purchased_item->food_item_description;
        $purchased_item_image = $purchased_item->food_item_image;
        return view('purchase')->with([
            'purchased_item' => $purchased_item,
            'purchased_item_name' => $purchased_item_name,
            'purchased_item_description' => $purchased_item_description,
            'purchased_item_image' => $purchased_item_image,
        ]);
    }
}
