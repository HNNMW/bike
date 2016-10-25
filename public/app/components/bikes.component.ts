import { Component } from '@angular/core';
import {bikeImage} from '../interfaces/bikeImage.interface'


@Component({
    selector: 'bikes',
    styleUrls: ['app/style/bikes.css'],
    templateUrl: '/app/views/bikes.html',
})
export class BikesComponent {

    public images = images;


}

var images: bikeImage[] = [
    { "id" : 1, "url": "/images/bike2.jpg", title: "Blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quamdui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. " },
    { "id" : 2, "url": "/images/bike2.jpg", title: "andere blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam dui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. Integer venenatis, ex vitae venenatis faucibus, orci dui posuere lectus, in congue lacus orci a orci. Sed vel dictum urna, id consequat est. " },
    { "id" : 3, "url": "/images/bike2.jpg", title: "Blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quamdui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. " },
    { "id" : 4, "url": "/images/bike2.jpg", title: "Blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quamdui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. " },
    { "id" : 5, "url": "/images/bike2.jpg", title: "Blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quamdui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. " },
    { "id" : 6, "url": "/images/bike2.jpg", title: "andere blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam dui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. Integer venenatis, ex vitae venenatis faucibus, orci dui posuere lectus, in congue lacus orci a orci. Sed vel dictum urna, id consequat est. " },
    { "id" : 7, "url": "/images/bike2.jpg", title: "Blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quamdui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. " },
    { "id" : 8, "url": "/images/bike2.jpg", title: "Blauwe super fiets", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quamdui, varius non ipsum nec, sagittis varius mi. Mauris id faucibus sapien, ac pretium elit. " }
];
