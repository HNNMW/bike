/**
 * Created by Bob on 8-10-2016.
 */
import {Component, OnInit} from '@angular/core';
import {galleryImage} from '../interfaces/galleryImage.interface';
import {ActivatedRoute} from "@angular/router";

@Component({
    selector: 'gallery',
    styleUrls: ['app/style/gallery.css'],
    templateUrl: '/app/views/gallery.html',

})

export class GalleryComponent implements OnInit {
    public images;
    selectedImage: galleryImage;
    displayLargeImage: boolean;

    constructor(private route: ActivatedRoute) {
    }

    ngOnInit() {
        this.images= this.route.snapshot.data['galleryImage'];
    }

    // Enlarge the selected image
    public enlargeImage = function (image: galleryImage) {
        if (window.innerWidth > 1024) {
            this.selectedImage = image;
            this.displayLargeImage = true;
        }
    }

    // Close the image which is currently enlarged
    public closeImage = function () {
        this.displayLargeImage = false;
    }
}
