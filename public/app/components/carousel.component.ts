/**
 * Created by Bob on 8-10-2016.
 */
import { Component, ElementRef, ViewChild, OnInit} from '@angular/core';
import { carouselImage } from '../interfaces/carouselImage.interface';
import { RouterModule }   from '@angular/router';

@Component({
    selector: 'carousel',
    styleUrls: ['app/style/carousel.css'],
    templateUrl: '/app/views/carousel.html',
})
export class CarouselComponent {
    public images = images;
}

var images: carouselImage[] = [
    { "url": "/images/IMG_3370.jpg" },
    { "url": "/images/IMG_3377.jpg" },
    { "url": "/images/IMG_3619.jpg" },
    { "url": "/images/IMG_3607.jpg" },
    { "url": "/images/IMG_3564.jpg" }
];

