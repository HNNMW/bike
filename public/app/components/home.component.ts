/**
 * Created by Bob on 8-10-2016.
 */
import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {Router} from '@angular/router';

@Component({
    selector: 'home',
    styleUrls: ['app/style/home.css'],
    templateUrl: '/app/views/home.html',
})
export class HomeComponent implements OnInit {
    public sliderImages;

    constructor(private route: ActivatedRoute, private router: Router) {
    }

    ngOnInit() {
        this.sliderImages = this.route.snapshot.data['sliderImage'];
        this.router.events.subscribe(() => {
            if (window.location.href.indexOf("contact") > -1)
                window.scrollTo(0, document.getElementById('contact').offsetTop);
            if (window.location.href.indexOf("about") > -1)
                window.scrollTo(0, document.getElementById('about').offsetTop);

            return;
        });
    }
}