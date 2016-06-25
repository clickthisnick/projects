import { Component } from '@angular/core';
@Component({
  moduleId: module.id,
  selector: 'my-app',
  templateUrl: 'main.html',
})

export class AppComponent {
  class = 'relative';
  class = 'relative';
  type = 'Component-relative template & style URLs';
  path = 'path.component.html';
  public constructor(private titleService: Title ) { }

  public setTitle( newTitle: string) {
    this.titleService.setTitle( newTitle );
  }
}
