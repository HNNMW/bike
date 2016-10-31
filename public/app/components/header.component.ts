import {Component} from '@angular/core';
@Component({
    selector: 'header',
    styleUrls: ['app/style/header.css'],
    templateUrl: '/app/views/header.html',
})
export class HeaderComponent {
    hideHeader: boolean;
    openDropdown = false;
    previousScroll: number = 0;

    toggleDropdown = function () {
        this.openDropdown = !this.openDropdown
    }

    onScroll() {
        if (window.scrollY > 50)
            this.hideHeader = true;

        // Show header when scrolling up
        if (window.scrollY < this.previousScroll)
            this.hideHeader = false;

        this.previousScroll = window.scrollY;
    }

}
