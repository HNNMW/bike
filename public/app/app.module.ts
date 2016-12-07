import {NgModule}      from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import { RouterModule }   from '@angular/router';
import {AppComponent}   from './components/app.component';
import {HeaderComponent} from "./components/header.component";
import {CarouselComponent} from "./components/carousel.component";
import {BikesComponent} from "./components/bikes.component";
import {HomeComponent} from "./components/home.component";
import {GalleryComponent} from "./components/gallery.component";
import {BikeDetailsComponent} from "./components/bikeDetails.component";
import {FooterComponent} from "./components/footer.component";
import {AboutComponent} from "./components/about.component";
import {OrderBy} from "./pipes/orderBy";
import {ContactComponent} from "./components/contact.component";

@NgModule({
    imports: [BrowserModule,
        RouterModule.forRoot([
            { path: '', component: HomeComponent },
            { path: 'bikes', component: BikesComponent },
            { path: 'bike-details/:id', component: BikeDetailsComponent },
            { path: 'gallery', component: GalleryComponent }
        ])],
    declarations: [AppComponent, HeaderComponent, CarouselComponent, HomeComponent, BikesComponent, GalleryComponent, BikeDetailsComponent, FooterComponent, AboutComponent, OrderBy, ContactComponent],
    bootstrap: [AppComponent]
})


export class AppModule {
}
