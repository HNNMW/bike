<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bike as Bike;
use App\BikeImage as BikeImage;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::orderBy('sort')->get();
        return view('admin.bikes.index')->with(compact('bikes'));
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
        $bike = Bike::findOrFail($id);

        return view('admin.bikes.edit')->with(compact('bike'));
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
        $bike = Bike::findOrFail($id);

        if (!$bike->update($request->all())) {
            return redirect('/admin/bikes/' . $id . '/edit')->with(['message' => 'Update failed']);
        }
        return redirect('/admin/bikes/');
    }

    /**
     * Update the sort
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Array with bikes on order
     * @return \Illuminate\Http\Response
     */
    public function updateSort(Request $request)
    {
        $bike_order = $request->input('bike_order');
        $bike_order = json_decode($bike_order);

        // for ($i=0; $i < count($bike_order); $i++) {
        //     $bike = Bike::find($bike_order[$i]);
        //     $bike->sort = $i;
        //     $bike->save();
        // }
        $index = 1;
        foreach ($bike_order as $bikeId => $value) {

             $id = (int) $value;
              $bike = Bike::find($id);
              $bike->sort = $index;
              $bike->save();
              $index++;
        }

        return "success";
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
