/**
 * Created by Bob on 23-11-2016.
 */
import {bikeImage} from '../interfaces/bikeImage.interface'

export class Bike {
    constructor(
        public id: number,
        public title: string,
        public description:string,
        public sort : number,
        public images: bikeImage[]
    ){}
}