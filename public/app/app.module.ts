import {NgModule}      from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import { RouterModule }   from '@angular/router';
import {AppComponent}   from './components/app.component';
import {HeaderComponent} from "./components/header.component";
import {CarouselComponent} from "./components/carousel.component";
import {GalleryComponent} from "./components/gallery.component";
import {BikesComponent} from "./components/bikes.component";
import {HomeComponent} from "./components/home.component";


@NgModule({
    imports: [BrowserModule,
        RouterModule.forRoot([
            { path: '', component: HomeComponent },
            { path: 'bikes', component: BikesComponent }
        ])],

    declarations: [AppComponent, HeaderComponent, CarouselComponent, HomeComponent, BikesComponent, GalleryComponent],
    bootstrap: [AppComponent]
})

export class AppModule {
}
