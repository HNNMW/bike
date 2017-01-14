<?php

namespace App\Http\Controllers;

use App\GalleryImage as GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use App\Http\Requests;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery_images = GalleryImage::orderBy('sort')->get();
        return view('admin.galleries.index')->with(compact('gallery_images'));
    }

    public function store(Request $request)
    {
        $gallery_image = $request->file('image');

        if (!empty($gallery_image)) {


                $imageName = $gallery_image->getClientOriginalName();

                if (File::exists('images/galleryImages/' . $imageName)) {
                    $imageName = time() . $gallery_image->getClientOriginalName();
                }

            $gallery_image->move(
                    'images/galleryImages/', $imageName
                );

            $img = Image::make( 'images/galleryImages/' . $imageName);
            $img->resize(1536 , 1024);
            $img->save('images/galleryImages/' . $imageName);


            $gallery_image = new GalleryImage();
            $gallery_image->title = $request->input('title');
            $gallery_image->description = $request->input('description');
            $gallery_image->url = 'images/galleryImages/' . $imageName;
            $gallery_image->sort = 0;
            $gallery_image->save();
            }
        $gallery_images = GalleryImage::orderBy('sort')->get();
            return view('admin.galleries.index')->with(compact('gallery_images'));

    }

    public function destroy($id)
    {
        $gallery_image = GalleryImage::find($id);
        File::delete($gallery_image->url);
        $gallery_image->delete();
        $gallery_images = GalleryImage::orderBy('sort')->get();
        return view('admin.galleries.index')->with(compact('gallery_images'));

    }

    public function updateSort(Request $request)
    {
        $gallery_order = $request->input('gallery_order');
        $gallery_order = json_decode($gallery_order);

        $index = 1;

        foreach ($gallery_order as $order => $value) {

            $id = (int)$value;
            $gallery_image = GalleryImage::find($id);
            $gallery_image->sort = $order;
            $gallery_image->save();
            $index++;
        }

        return 'test';
    }

    public function create () {

        return view('admin.galleries.create');
    }

}
