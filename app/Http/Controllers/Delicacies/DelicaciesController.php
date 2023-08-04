<?php

namespace App\Http\Controllers\Delicacies;

use App\Http\Controllers\Controller;
use App\Models\Delicacy;
use Illuminate\Http\Request;

class DelicaciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delicacies = Delicacy::all();
        return view('admin.delicacies.delicacies')->with('delicacies' , $delicacies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.delicacies.adddelicacies');
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
            'food_item_name' => 'required',
            'food_item_price' => 'required',
            'food_item_description' => 'required',
            'food_item_image' => 'required'
        ]);

        $image = $request->file('food_item_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $delicacy = new Delicacy;
        $delicacy->food_item_name = $request->input('food_item_name');
        
        $delicacy->food_item_price = $request->input('food_item_price');
        $delicacy->food_item_description = $request->input('food_item_description');
        $delicacy->food_item_image = 'images/' . $imageName;
        $delicacy->save();

        return redirect()->route('delicacies')->with('success', 'Item Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delicacy = Delicacy::find($id);
        return view('admin.delicacies.editdelicacy')->with('delicacy' , $delicacy);
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
        $delicacy = Delicacy::find($id);
        $delicacy->food_item_name = $request->input('food_item_name');
        $delicacy->food_item_price = $request->input('food_item_price');
        $delicacy->food_item_description = $request->input('food_item_description');
        $delicacy->save();
        return redirect()->route('delicacies')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delicacy = Delicacy::find($id);
        $delicacy->delete();

        return redirect()->route('delicacies')->with('success', 'Successfully Deleted');
    }
}
