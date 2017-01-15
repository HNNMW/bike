/**
 * Created by Bob on 30/11/2016.
 */
import {Injectable} from '@angular/core';
import {Http, Response, Headers} from '@angular/http';
import 'rxjs/add/operator/map';


@Injectable()
export class EmailService {
    public bikes;
    private headers = new Headers();

    constructor(private http: Http) {
    }

    public sendEmail(message) {
        this.headers.append('Content-Type', 'application/json');

        this.http.post('/api/contact/mail',
            {
                name: message.name,
                email: message.email,
                textMessage: message.textMessage
            },
            {headers: this.headers})
            .map((res: Response) => res.json())
            .subscribe(() => console.log('done'));
    }
}

