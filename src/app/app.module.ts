import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

import {AppComponent} from './app.component';
import {FormsModule, ReactiveFormsModule} from "@angular/forms";
import {CommonModule} from "@angular/common";
import {HttpClientModule} from "@angular/common/http";
import {RouterModule, Routes} from "@angular/router";
import {ParentComponent} from './parent/parent.component';
import {MessageComponent} from './message/message.component';
import {AppService} from "./service";


const routes: Routes = [
  {path: 'parent', component: ParentComponent},
  {path: 'message', component: MessageComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    ParentComponent,
    MessageComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    CommonModule,
    HttpClientModule,
    RouterModule.forRoot(routes)
  ],
  providers: [AppService],
  bootstrap: [AppComponent]
})
export class AppModule {
}
