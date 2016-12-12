import {Component, OnInit} from '@angular/core';
import {User} from "../model/user.model";
import {Router, NavigationEnd, NavigationStart} from "@angular/router";

@Component({
    selector: 'bike-app',
    templateUrl: '/app/views/index.html'
})
export class AppComponent implements OnInit {

    testObject = new User();

    public constructor(private router: Router) {

    }

    ngOnInit() {
        this.router.events.subscribe((evt) => {
            if (!(evt instanceof NavigationEnd)) {
                return;
            }
            if (window.location.href.indexOf("contact") == -1 && window.location.href.indexOf("contact") == -1)
                 document.body.scrollTop = 0;
        });
    }

}
