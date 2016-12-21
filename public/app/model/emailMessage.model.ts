/**
 * Created by Bob on 23-11-2016.
 */

export class EmailMessage {
    public name: string;
    public email: string;
    public textMessage:string;

    constructor(name, email, textMessage
    ){
        this.name = name;
        this.email = email;
        this.textMessage = textMessage;
    }
}
