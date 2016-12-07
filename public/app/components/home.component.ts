/**
 * Created by Bob on 8-10-2016.
 */
import {Component, OnInit} from '@angular/core';
import {bikeImage} from '../interfaces/bikeImage.interface';
import {ActivatedRoute} from "@angular/router";

@Component({
    selector: 'home',
    styleUrls: ['app/style/home.css'],
    templateUrl: '/app/views/home.html',
})
export class HomeComponent implements OnInit {
    public sliderImages;

    constructor(private route: ActivatedRoute) {
    }

    ngOnInit() {
        this.sliderImages = this.route.snapshot.data['sliderImage'];
    }
}