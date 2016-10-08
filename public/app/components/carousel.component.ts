/**
 * Created by Bob on 8-10-2016.
 */
import { Component } from '@angular/core';
import { carouselImage } from '../interfaces/carouselImage.interface';
@Component({
    selector: 'carousel',
    styleUrls: ['app/style/carousel.css'],
    templateUrl: '/app/views/carousel.html',
})
export class CarouselComponent {
    public images = images;
}

var images: carouselImage[] = [
    { "url": "/images/bike2.jpg" },
    { "url": "/images/bike2.jpg" },
    { "url": "/images/bike2.jpg" },
    { "url": "/images/bike2.jpg" },
    { "url": "/images/bike2.jpg" }
];