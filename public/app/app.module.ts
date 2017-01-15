import {NgModule}      from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import {RouterModule, Resolve}   from '@angular/router';
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
import {HttpModule} from '@angular/http';
import {BikeResolver} from "./resolvers/bike.resolver";
import {SliderImageResolver} from "./resolvers/sliderImage.resolver";
import {GalleryImageResolver} from "./resolvers/galleryImage.resolver";
import {BikeDetailResolver} from "./resolvers/bikeDetail.resolver";
import {ContactComponent} from "./components/contact.component";
import {FormsModule}   from '@angular/forms';
import {EmailService} from "./Services/EmailService";

@NgModule({
    imports: [BrowserModule, HttpModule, FormsModule,
        RouterModule.forRoot([
            {
                path: '', component: HomeComponent, resolve: {
                sliderImage: SliderImageResolver
            }
            },
            {
                path: 'about', component: HomeComponent, resolve: {
                sliderImage: SliderImageResolver
            }
            },
            {
                path: 'contact', component: HomeComponent, resolve: {
                sliderImage: SliderImageResolver
            }
            },
            {
                path: 'bikes', component: BikesComponent, resolve: {
                bike: BikeResolver
            }
            },
            {
                path: 'bike-details/:id', component: BikeDetailsComponent, resolve: {
                bikeDetails: BikeDetailResolver
            }
            },
            {
                path: 'gallery', component: GalleryComponent, resolve: {
                galleryImage: GalleryImageResolver
            }
            }
        ])],
    providers: [BikeResolver, SliderImageResolver, GalleryImageResolver, EmailService, BikeDetailResolver],
    declarations: [AppComponent, HeaderComponent, CarouselComponent, HomeComponent, BikesComponent, GalleryComponent, BikeDetailsComponent, FooterComponent, AboutComponent, OrderBy, ContactComponent],
    bootstrap: [AppComponent]
})


export class AppModule {
}
