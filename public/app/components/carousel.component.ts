/**
 * Created by Bob on 8-10-2016.
 */
import {Component, OnInit} from '@angular/core';
import {ActivatedRoute}   from '@angular/router';

@Component({
    selector: 'carousel',
    styleUrls: ['app/style/carousel.css'],
    templateUrl: '/app/views/carousel.html',
})
export class CarouselComponent implements OnInit {
    public images;

    constructor(private route: ActivatedRoute) {    }

    ngOnInit() {
        this.images = this.route.snapshot.data['sliderImage'];
    }
}
