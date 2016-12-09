import { Component, OnInit  } from '@angular/core';
import { Router } from '@angular/router';
@Component({
    selector: 'footer',
    styleUrls: ['app/style/footer.css'],
    templateUrl: '/app/views/footer.html',
})
export class FooterComponent implements OnInit {
    public showFooter = true;
    constructor(private router: Router) { }

    ngOnInit() {
        this.router.events.subscribe(() => {
                if(window.location.href.indexOf("gallery") > -1)
                    this.showFooter = false;
                else
                    this.showFooter = true;
                return;
        });
    }
}
