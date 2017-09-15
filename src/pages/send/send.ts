import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import {Http, Response } from '@angular/http';
import { ToastController } from 'ionic-angular';
import 'rxjs/add/operator/map';

@Component({
  selector: 'page-send',
  templateUrl: 'send.html'
})
export class SendPage {
  numbers;
  message;
  subject;
  numbersArray=[];
  sendNum ="";

  constructor(public navCtrl: NavController,public http: Http,private toastCtrl: ToastController) {

  }



  sendRequest(){
    this.getNumbers();
    let url = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=+"+this.sendNum+"&from="+this.subject+"&text="+this.message+"&dlr-mask=31";
    this.http.get(url)
    .map((res:Response) => res.json())
    .subscribe(data => {
   
   console.log(data);
    },
    err => {
      console.log('Server error');
     
    });
    this.presentToast('Message Delivered');
  }

  getNumbers(){
   var nums= this.numbers.split(';');
   
   var count = this.numbers.split(';').length-1;
      for(var i=0;i<=count;i++){
        if(i==0){
          this.sendNum=nums[i];
        }
        else{this.sendNum=this.sendNum+"+"+nums[i];}
      }
   console.log(this.sendNum);
  }


  presentToast(msg) {
    let toast = this.toastCtrl.create({
      message: msg,
      duration: 5000,
      position: 'bottom'
    });
  
    toast.onDidDismiss(() => {
      console.log('Dismissed toast');
    });
  
    toast.present();

    
}

}