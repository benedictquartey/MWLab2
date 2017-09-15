import { Component } from '@angular/core';

import { MessagesPage } from '../messages/messages';

import { SendPage } from '../send/send';

@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {

  tab1Root = SendPage;
  tab2Root = MessagesPage;
  
  
  constructor() {

  }
}
