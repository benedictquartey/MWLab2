import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';

/*
  Generated class for the RequestProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class RequestProvider {

  constructor(public http: Http) {
    console.log('Hello RequestProvider Provider');
  }


  sendMessage(msg,number){
   // let url = "http://picasaweb.google.com/data/entry/api/user/ronaldnettey@yahoo.com?alt=json";
   let url = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to="+ number + "&from=Ronald&text=" + msg + "&dlr-mask=31";
    this.http.get(url)
    .map((res:Response) => res.json())
    .subscribe(data => {
   console.log(data);
    },
    err => {
      console.log('Server error');
     
    });
  }

}
