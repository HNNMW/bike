import { Component } from '@angular/core';
import {bikeImage} from '../interfaces/bikeImage.interface'

@Component({
    selector: 'bike-details',
    styleUrls: ['app/style/bikeDetails.css'],
    templateUrl: '/app/views/bikeDetails.html',
})

export class BikeDetailsComponent {

    public images = images

    public changeImage = function (imageId) : void{
        var tempImage = images.find(i => i.order === 1);
        for (let i = 0; i < images.length; i++){
            if(images[i].id === imageId){
                images.find(i => i.id === tempImage.id).order = images[i].order;
                images[i].order = 1;
            }
        }
    }
}

var images: bikeImage[] = [
    { "id" : 1, "url": "/images/bike2.jpg", order : 6},
    { "id" : 2, "url": "/images/bike2.jpg", order : 2},
    { "id" : 3, "url": "/images/bike2.jpg", order : 3},
    { "id" : 4, "url": "/images/bike2.jpg", order : 4},
    { "id" : 5, "url": "/images/bike2.jpg", order : 5}
];
