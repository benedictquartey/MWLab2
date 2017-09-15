import {Component, OnInit} from '@angular/core';
import {Parent} from "../parent";
import {AppService} from "../service";
import {FormBuilder, FormGroup, Validators} from "@angular/forms";


@Component({
  selector: 'app-parent',
  templateUrl: './parent.component.html',
  styleUrls: ['./parent.component.css']
})
export class ParentComponent implements OnInit {

  parents: Array<Parent>;
  messageForm: FormGroup;
  message: string = '';
  loading: boolean = false;

  constructor(private appService: AppService, fb: FormBuilder) {
    this.messageForm = fb.group({
      'message': ['', Validators.maxLength(160)]
    });
  }

  sendSMSs() {
    let receivers: string = '';
    let index: number = 0;
    this.parents.forEach(par => {
      if (par.selected) {
        if (index === 0) {
          receivers += par.phone;
          index++;
        } else {
          receivers += '+' + par.phone;
          index++;
        }

      }
    });
    this.loading = true;
    this.appService.sendMessage(receivers, this.message).subscribe(
      data => {
        console.log(data);
        this.message = '';
      },
      error => {
        console.log(error);
        this.message = '';
      }
    );
    setTimeout(() => {
      this.message = '';
      this.loading = false;
      alert('Sent');
    }, 2000);
  }

  ngOnInit() {
    this.getParents();
  }

  select(parent: Parent) {
    this.appService.parents.find(par => par == parent).selected =
      !this.appService.parents.find(par => par == parent).selected;
  }

  getParents() {
    this.appService.getParents()
      .subscribe(
        (data: Array<Parent>) => {
          this.parents = data;
        },
        error => {
          console.log(error);
        }
      );
  }

  checkIfParentIsSelected(): boolean {
    return this.parents.find(par => par.selected == true) != null;
  }

}
