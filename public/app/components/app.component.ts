import { Component } from '@angular/core';
import {User} from "../model/user.model";
import {OrderBy} from "../pipes/orderBy";

@Component({
    selector: 'bike-app',
    templateUrl: '/app/views/index.html'
})
export class AppComponent {

    testObject = new User();

    public constructor() {

    }

}
