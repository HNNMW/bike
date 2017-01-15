import {Component, OnInit, enableProdMode} from '@angular/core';
import {Router, NavigationEnd} from "@angular/router";
enableProdMode();

@Component({
    selector: 'bike-app',
    templateUrl: '/app/views/index.html'
})
export class AppComponent implements OnInit {

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
