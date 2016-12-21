/**
 * Created by Bob on 8-10-2016.
 */
import {Component} from '@angular/core';
import {EmailMessage} from '../model/emailMessage.model';
import {EmailService} from '../Services/EmailService';

@Component({
    selector: 'contact',
    styleUrls: ['app/style/contact.css'],
    templateUrl: '/app/views/contact.html',
})
export class ContactComponent {
    private name;
    private email;
    private textMessage;
    private showSentMessage = false;
    private showErrorMessage = false;

    constructor(private emailService: EmailService) {
    }

    public sendEmail() {
        var emailMessage = new EmailMessage(this.name, this.email, this.textMessage);
        console.log(emailMessage);

        if (this.name === "" || this.email === "" || this.textMessage === "" || this.name === undefined || this.email === undefined || this.textMessage === undefined ) {
            this.showErrorMessage = true;
        } else {
            this.emailService.sendEmail(emailMessage);
            this.showErrorMessage = false;
            this.showSentMessage = true;
        }
    }
}

