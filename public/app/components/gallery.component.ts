/**
 * Created by Bob on 8-10-2016.
 */
import { Component,  trigger, transition, style, animate, state } from '@angular/core';
import { galleryImage } from '../interfaces/galleryImage.interface';

@Component({
    selector: 'gallery',
    styleUrls: ['app/style/gallery.css'],
    templateUrl: '/app/views/gallery.html',

})

export class GalleryComponent {
    public images = images;
    selectedImage: galleryImage;
    enlargedImageUrl : string;
    displayLargeImage : boolean;
    desc : string;
    title : string;

    public enlargeImage = function (image : galleryImage ){
        this.selectedImage = image;
        this.displayLargeImage = true;
    }

    public closeImage = function (){
        this.displayLargeImage = false;
    }

}

var images: galleryImage[] = [
    { "url": "/images/bike2.jpg", title: "Dikke leipe bika", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum sit amet odio ullamcorper scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis nisl ligula. Etiam aliquam luctus nulla in euismod. Donec libero ipsum, posuere nec malesuada vitae, tempus euismod justo." },
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
