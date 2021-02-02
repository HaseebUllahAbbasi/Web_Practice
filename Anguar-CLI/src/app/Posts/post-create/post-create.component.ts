import {Component} from '@angular/core';

@Component(
  {
    selector: 'app-post-create',
    templateUrl: './post-create.component.html',
    styleUrls: ['./post-create.component.css']
  }
)
export class PostCreateComponent {
  // tslint:disable-next-line:variable-name
    new_post = 'this is sample';

  // tslint:disable-next-line:typedef variable-name
  entered_value = '' ;

  // tslint:disable-next-line:typedef
  onAddPost() {
    this.new_post = this.entered_value;
  }
}
