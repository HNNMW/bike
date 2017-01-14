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
            $img->resize(1920, 1280);
            $img->save('images/sliderImages/' . $imageName);


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

        $gallery_image->delete();
        $gallery_images = GalleryImage::orderBy('sort')->get();
        return view('admin.galleries.index')->with(compact('gallery_images'));

    }
}
