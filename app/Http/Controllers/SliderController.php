<?php

namespace App\Http\Controllers;

use App\SliderImage as SliderImage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Http\Requests;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider_images = SliderImage::orderBy('sort')->get();
        return view('admin.sliders.index')->with(compact('slider_images'));
    }

    public function store(Request $request)
    {
        $date = date('his', time());
        $slider_images = $request->file('images');


        foreach($slider_images as $slider_image => $value) {

            $imageName = $value->getClientOriginalName();

            if (File::exists('images/sliderImages/'.$imageName)){
                $imageName = $date . $value->getClientOriginalName();
            }

            $value->move(
                'images/sliderImages/', $imageName
            );
            $slider_image = new SliderImage();
            $slider_image->url = 'images/sliderImages/'.$imageName;
            $slider_image->sort = 0;
            $slider_image->save();
        }
        $slider_images = SliderImage::orderBy('sort')->get();
        return view('admin.sliders.index')->with(compact('slider_images'));
    }

    public function destroy($id)
    {
        $slider_image = SliderImage::find($id);

        $slider_image->delete();
        $slider_images = SliderImage::orderBy('sort')->get();
        return view('admin.sliders.index')->with(compact('slider_images'));

    }
    
    public function updateSort(Request $request)
    {
        $slider_image_order = $request->input('slider_image_order');
        $slider_image_order = json_decode($slider_image_order);

        $index = 1;

        foreach ($slider_image_order as $order => $value) {

            $id = (int)$value;
            $slider_image = SliderImage::find($id);
            $slider_image->sort = $order;
            $slider_image->save();
            $index++;
        }

        return 'test';
    }

}
