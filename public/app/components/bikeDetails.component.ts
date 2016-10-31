import { Component } from '@angular/core';
import {bikeImage} from '../interfaces/bikeImage.interface'

@Component({
    selector: 'bike-details',
    styleUrls: ['app/style/bikeDetails.css'],
    templateUrl: '/app/views/bikeDetails.html',
})

export class BikeDetailsComponent {

    public images = images;

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
    { "id" : 1, "url": "/images/IMG_3542.jpg", order : 1},
    { "id" : 2, "url": "/images/IMG_3431.jpg", order : 7},
    { "id" : 3, "url": "/images/IMG_3473.jpg", order : 3},
    { "id" : 4, "url": "/images/IMG_3486.jpg", order : 4},
    { "id" : 5, "url": "/images/IMG_3505.jpg", order : 6}
];
