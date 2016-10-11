import {NgModule}      from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import {AppComponent}   from './components/app.component';
import {HeaderComponent} from "./components/header.component";
import {CarouselComponent} from "./components/carousel.component";
import {UploadSlideShowComponent} from "./components/uploadSlideShow.component";
@NgModule({
    imports: [BrowserModule],
    declarations: [AppComponent, HeaderComponent, CarouselComponent, UploadSlideShowComponent],
    bootstrap: [AppComponent]
})
export class AppModule {
}
