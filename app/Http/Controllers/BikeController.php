<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike as Bike;
use App\BikeImage as BikeImage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;

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
        return view('admin.bikes.create');
    }


    public function store(Request $request)
    {
        $bike_images = $request->file('images');

        $bike = new Bike();
        $bike->title = $request->input('title');
        $bike->description = $request->input('description');
        $bike->sort = 0;
        $bike->save();


            if (!empty($bike_images)) {

                foreach ($bike_images as $sort => $bike_image) {

                $imageName = $bike_image->getClientOriginalName();

                if (File::exists('images/bikeImages/' . $imageName)) {
                    $imageName = time() . $bike_image->getClientOriginalName();
                }

                $bike_image->move(
                    'images/bikeImages/', $imageName
                );

                $img = Image::make( 'images/bikeImages/' . $imageName);
                $img->resize(1536 , 1024);
                $img->save('images/bikeImages/' . $imageName);

                $bikeImage = new BikeImage;
                $bikeImage->url = 'images/bikeImages/' . $imageName;
                $bikeImage->bikeId = $bike->id;
                $bikeImage->sort = $sort;
                $bikeImage->save();

            }
        }

        return redirect('admin/bikes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
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
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bike = Bike::findOrFail($id);

        if (!$bike->update($request->all())) {
            return redirect('/admin/bikes/' . $id . '/edit')->with(['message' => 'Update failed']);
        }

        $images = $request->file('images');

        if (!empty($images)) {
            foreach ($images as $image) {

                $name = $image->getClientOriginalName();

                if (File::exists('images/bikeImages/' . $name)) {
                    $name = time() . $image->getClientOriginalName();
                }

                $image->move(
                    'images/bikeImages/', $name
                );

                $bikeImage = new BikeImage();
                $bikeImage->url = 'images/bikeImages/' . $name;
                $bikeImage->bikeId = $id;
                $bikeImage->sort = 0;
                $bikeImage->save();
            }
        }

        return redirect('/admin/bikes/');
    }

    /**
     * Update the sort
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Array with bikes on order
     * @return \Illuminate\Http\Response
     */
    public function updateSort(Request $request)
    {
        $bike_order = $request->input('bike_order');
        $bike_order = json_decode($bike_order);

        $index = 1;

        foreach ($bike_order as $bikeId => $value) {

            $id = (int)$value;
            $bike = Bike::find($id);
            $bike->sort = $bikeId;
            $bike->save();
            $index++;
        }

        return 'test';
    }
    public function updateImageSort(Request $request)
    {
        $bike_image_order = $request->input('bike_image_order');
        $bike_image_order = json_decode($bike_image_order);

        $index = 1;

        foreach ($bike_image_order as $bikeimageId => $value) {

            $id = (int)$value;
            $bikeImage = BikeImage::find($id);
            $bikeImage->sort = $bikeimageId;
            $bikeImage->save();
            $index++;
        }

        return 'test';
    }

    public function destroy($id)
    {
        $bike = Bike::find($id);

        $bike->delete();
        BikeImage::where('bikeId', $id)->delete();
        $bikes = Bike::orderBy('sort')->get();
        return view('admin.bikes.index')->with(compact('bikes'));

    }
    public function destroyImage($id)
    {

        $bikeImage = BikeImage::find($id);
        $bikeId = $bikeImage->bikeId;
        $bike = Bike::findOrFail($bikeId);
        $bikeImage->delete();

        return redirect('/admin/bikes/' . $bikeId . '/edit')->with(compact('bike'));

    }
}
