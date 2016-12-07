import {Component, OnInit} from '@angular/core';
import { ActivatedRoute } from '@angular/router';


@Component({
    selector: 'bikes',
    styleUrls: ['app/style/bikes.css'],
    templateUrl: '/app/views/bikes.html',
})
export class BikesComponent implements OnInit {
    public bikes;

    constructor(
        private route: ActivatedRoute
    ) {}

    ngOnInit() {
        let bikeObject = this.route.snapshot.data['bike'];
        this.bikes = bikeObject.bikes;
        console.log(this.bikes);
    }
}
