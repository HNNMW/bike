/**
 * Created by Bob on 8-10-2016.
 */
import { Component } from '@angular/core';
import { galleryImage } from '../interfaces/galleryImage.interface';

@Component({
    selector: 'gallery',
    styleUrls: ['app/style/gallery.css'],
    templateUrl: '/app/views/gallery.html',
})

export class GalleryComponent {
    public images = images;
    enlargedImageUrl : string;
    displayLargeImage : boolean;

    public enlargeImage = function (id){
        this.enlargedImageUrl = id;
        this.displayLargeImage = true;
    }

    public closeImage = function (){
        this.displayLargeImage = false;
        console.log("test");
    }

}

var images: galleryImage[] = [
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" },
    { "url": "/images/bike2.jpg", title: "asd", description: "asd" }
];
