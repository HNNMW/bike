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
    public bikes;

    constructor(private http: Http) {
    }

    resolve(route: ActivatedRouteSnapshot,
            state: RouterStateSnapshot): Observable<any>|Promise<any>|any {
        return this.http.get('/api/bikes').map((res: Response) => {
            this.bikes = res.json();
            return this.bikes;
        });
    }

    public getBikebyId(id : number){
        return this.bikes.find(bikes => bikes.id == id);
    };
}