import {Component} from '@angular/core';
import {Router} from "@angular/router";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  isloggedIn: boolean = false;
  hideSend: boolean = false;

  constructor(private router: Router) {

  }

  changeLogIn() {
    this.isloggedIn = !this.isloggedIn;
  }

  goToMessage() {
    this.router.navigate(['message']);
    this.hideSend = true;
  }
}
