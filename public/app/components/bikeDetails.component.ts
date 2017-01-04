import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from '@angular/router';
import {BikeResolver} from '../resolvers/bike.resolver';

@Component({
    selector: 'bike-details',
    styleUrls: ['app/style/bikeDetails.css'],
    templateUrl: '/app/views/bikeDetails.html',
})

export class BikeDetailsComponent implements OnInit {
    public bike;

    constructor(private bikeResolver: BikeResolver, private route: ActivatedRoute) {

    }

    ngOnInit() {
        this.bike = this.bikeResolver.getBikebyId(this.route.snapshot.params['id']);
        if (this.bike == undefined)
            this.bike = this.route.snapshot.data['bikeDetails'];
    }

    public changeImage = function (imageId): void {
        var tempImage = this.images.find(i => i.sort === 0);
        for (let i = 0; i < this.images.length; i++) {
            if (this.images[i].id === imageId) {
                this.images.find(i => i.id === tempImage.id).sort = this.images[i].sort;
                this.images[i].sort = 0;
            }
        }
    }
}
