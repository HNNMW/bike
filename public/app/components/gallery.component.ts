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
    desc : string;
    title : string;

    public enlargeImage = function (id, desc, title){
        this.enlargedImageUrl = id;
        this.desc = desc;
        this.title = title;
        this.displayLargeImage = true;
    }

    public closeImage = function (){
        this.displayLargeImage = false;
        console.log("test");
    }

}

var images: galleryImage[] = [
    { "url": "/images/bike2.jpg", title: "Green dare-devil fighter!", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum sit amet odio ullamcorper scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis nisl ligula. Etiam aliquam luctus nulla in euismod. Donec libero ipsum, posuere nec malesuada vitae, tempus euismod justo." },
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
