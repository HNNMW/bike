/**
 * Created by Bob on 23-11-2016.
 */
import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import 'rxjs/add/operator/map';
import {Observable} from 'rxjs/Rx';
import {bike} from '../model/bike.model'

@Injectable()
export class dataService {
    constructor(private http: Http) {
    }

    // Uses http.get() to load a single JSON file
    public getBikes(): Observable<bike[]> {
        return this.http.get('http://localhost:8000/api/bikes').map((res: Response) => res.json());

    }
}