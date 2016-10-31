import { Component } from '@angular/core';
import {User} from "../model/user.model";

@Component({
    selector: 'bike-app',
    templateUrl: '/app/views/index.html'
})
export class AppComponent {

    testObject = new User();

    public constructor() {

    }

}
