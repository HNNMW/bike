/**
 * Created by Bob on 30/11/2016.
 */
import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import 'rxjs/add/operator/map';
import {Observable} from 'rxjs/Rx';
import {Bike} from '../model/bike.model'
import {Resolve, ActivatedRouteSnapshot, RouterStateSnapshot} from "@angular/router";


@Injectable()
export class BikeResolver implements Resolve<Bike> {
    constructor(private http: Http) {
    }

    resolve(route: ActivatedRouteSnapshot,
            state: RouterStateSnapshot): Observable<any>|Promise<any>|any {
        return this.http.get('/api/bikes').map((res: Response) => {
            console.log(res.json());
            return res.json();
        });
    }
}