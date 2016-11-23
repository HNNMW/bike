/**
 * Created by Bob on 8-10-2016.
 */
import { Component} from '@angular/core';
import {dataService} from '../services/dataService'
import {bikeImage} from '../interfaces/bikeImage.interface';

@Component({
    selector: 'home',
    styleUrls: ['app/style/home.css'],
    templateUrl: '/app/views/home.html',
    providers: [dataService],
})
export class HomeComponent {
    public bikes;
    constructor(dataService: dataService) {
        dataService.getBikes().subscribe(bikes => {
            this.bikes = bikes;
        });

        console.log(this.bikes);
    }



}

