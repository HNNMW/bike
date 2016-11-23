/**
 * Created by Bob on 23-11-2016.
 */

import {bikeImage} from '../interfaces/bikeImage.interface'

export class bike {
    //{"bikes":[{"id":55,"title":"test1","description":"sadfasfd","sort":0,"images":[]}
    constructor(
        public id: number,
        public title: string,
        public description:string,
        public sort : number,
        public images: bikeImage[]
    ){}
}