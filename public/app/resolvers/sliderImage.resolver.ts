/**
 * Created by Bob on 30/11/2016.
 */
import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import 'rxjs/add/operator/map';
import {Observable} from 'rxjs/Rx';
import {Resolve, ActivatedRouteSnapshot, RouterStateSnapshot} from "@angular/router";
import {SliderImage} from '../model/sliderImage.model'


@Injectable()
export class SliderImageResolver implements Resolve<SliderImage> {
    constructor(private http: Http) {
    }

    resolve(route: ActivatedRouteSnapshot,
            state: RouterStateSnapshot): Observable<any>|Promise<any>|any {
        return this.http.get('http://localhost:8000/api/sliderimages').map((res: Response) => res.json());
    }
}