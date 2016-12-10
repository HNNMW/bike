import {Component} from '@angular/core';
import {ActivatedRoute} from '@angular/router';
import {BikeResolver} from '../resolvers/bike.resolver';

@Component({
    selector: 'bike-details',
    styleUrls: ['app/style/bikeDetails.css'],
    templateUrl: '/app/views/bikeDetails.html',
})

export class BikeDetailsComponent{
    public bike;
    public images;

    constructor(private bikeResolver: BikeResolver, route: ActivatedRoute){
        this.bike = this.bikeResolver.getBikebyId(route.snapshot.params['id']);
        this.images = this.bike.images;
    }

    public changeImage = function (imageId) : void{
        var tempImage = this.images.find(i => i.sort === 0);
        for (let i = 0; i < this.images.length; i++){
            if(this.images[i].id === imageId){
                this.images.find(i => i.id === tempImage.id).sort = this.images[i].sort;
                this.images[i].sort = 0;
            }
        }
    }
}
