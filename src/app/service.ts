import {Injectable} from "@angular/core";
import {Observable} from "rxjs/Observable";
import {PARENTS} from "./sample";
import {Parent} from "./parent";
import 'rxjs/add/observable/of';
import {HttpClient} from "@angular/common/http";

@Injectable()
export class AppService {

  username: string = 'Abdul-Razak';
  parents: Array<Parent> = null;

  constructor(private httpClient: HttpClient) {

    this.parents = [
      {name: 'Bhebhe Linda', phone: '233573283028', selected: false, sex: 'F'},
      {name: 'Jallow Alieu', phone: '233247995869', selected: false, sex: 'M'},
      {name: 'Bhebhe Lynn', phone: '233273996515', selected: false, sex: 'F'},
      {name: 'Abdul-Razak Adam', phone: '233548196535', selected: false, sex: 'M'}
    ];
    /*
        this.parents = [
          {name: 'Jallow Alieu', phone: '233203716882', selected: false, sex: 'M'},
          //{name: 'Bhebhe Lynn', phone: '233555263763', selected: false, sex: 'F'},
          {name: 'Abdul-Razak', phone: '233548196535', selected: false, sex: 'M'},
        ];
        */
  }

  getParents(): Observable<Array<Parent>> {
    return Observable.of(this.parents);
  }

  sendMessage(recipients: string, message: string) {
    let url: string = `http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=${recipients}&from=${this.username}&text=${message}&dlr-mask=31`;
    return this.httpClient.get(url);
  }
}
