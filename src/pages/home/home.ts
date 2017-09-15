import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import {RequestProvider} from '../../providers/request/request';


@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
number:number;
message:string;
numbers:number[] = [];
count: number; 
msg:string;

  constructor(public navCtrl: NavController,
              private request:RequestProvider) {
 
                this.msg = 'Dear Executives, you are invited to an emergency meeting at 3pm on Sunday, September 17 to discuss fundraising for our upcoming anniversary.';
  }


  processNumbers(){
    let processedNumberString:string;
    for(var i = 0; i < this.numbers.length; i++){
      if(i ==0 ){
        processedNumberString = this.numbers[i].toString(); 
      }
      else{
        processedNumberString = processedNumberString + "+" + this.numbers[i].toString(); 
      }
    }

    return processedNumberString;
  }

  addNumber(){
   this.numbers.push(this.number);
   this.number = null;

  }

  createChip(){

  }

  sendSMS(){
    console.log(this.processNumbers());
   this.request.sendMessage(this.message,this.processNumbers());
  }

}
