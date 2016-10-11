import {NgModule}      from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import { RouterModule }   from '@angular/router';
import {AppComponent}   from './components/app.component';
import {HeaderComponent} from "./components/header.component";
import {CarouselComponent} from "./components/carousel.component";
import {UploadSlideShowComponent} from "./components/uploadSlideShow.component";
import {FileDropDirective, FileSelectDirective} from "ng2-file-upload/ng2-file-upload";import {GalleryComponent} from "./components/gallery.component";
import {BikesComponent} from "./components/bikes.component";
import {HomeComponent} from "./components/home.component";


@NgModule({
    imports: [BrowserModule,
        RouterModule.forRoot([
            { path: '', component: HomeComponent },
            { path: 'bikes', component: BikesComponent },
            { path: 'gallery', component: GalleryComponent }
        ])],

    declarations: [AppComponent, HeaderComponent, CarouselComponent, HomeComponent, BikesComponent, GalleryComponent,UploadSlideShowComponent, FileDropDirective, FileSelectDirective],
    bootstrap: [AppComponent]
})


export class AppModule {
}
