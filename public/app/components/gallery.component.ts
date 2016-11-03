/**
 * Created by Bob on 8-10-2016.
 */
import {Component} from '@angular/core';
import {galleryImage} from '../interfaces/galleryImage.interface';

@Component({
    selector: 'gallery',
    styleUrls: ['app/style/gallery.css'],
    templateUrl: '/app/views/gallery.html',

})

export class GalleryComponent {
    public images = images;
    selectedImage: galleryImage;
    displayLargeImage: boolean;

    public enlargeImage = function (image: galleryImage) {
        if (window.innerWidth > 1024) {
            this.selectedImage = image;
            this.displayLargeImage = true;
        }
    }

    public closeImage = function () {
        this.displayLargeImage = false;
    }

}

var images: galleryImage[] = [
    {
        url: "/images/IMG_3370.JPG",
        title: "Dikke leipe bika",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum sit amet odio ullamcorper scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis nisl ligula. Etiam aliquam luctus nulla in euismod. Donec libero ipsum, posuere nec malesuada vitae, tempus euismod justo."
    },
    {"url": "/images/IMG_3475.jpg", title: "", description: ""},
    {"url": "/images/IMG_3377.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3386.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3393.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3394.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3415.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3486.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3469.jpg", title: "asd", description: "asd"},
    {"url": "/images/IMG_3431.jpg", title: "asd", description: "asd"}
];
