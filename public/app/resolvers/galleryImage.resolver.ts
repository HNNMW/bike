/**
 * Created by Bob on 30/11/2016.
 */
import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import 'rxjs/add/operator/map';
import {Observable} from 'rxjs/Rx';
import {GalleryImage} from '../model/galleryImage.model'
import {Resolve, ActivatedRouteSnapshot, RouterStateSnapshot} from "@angular/router";


@Injectable()
export class GalleryImageResolver implements Resolve<GalleryImage> {
    constructor(private http: Http) {
    }

    resolve(route: ActivatedRouteSnapshot,
            state: RouterStateSnapshot): Observable<any>|Promise<any>|any {
        return this.http.get('http://localhost:8000/api/galleryimages').map((res: Response) => res.json());
    }
}