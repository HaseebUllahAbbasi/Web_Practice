import {Component} from '@angular/core';

@Component(
  {
    selector: 'app-post-create',
    templateUrl: './post-create.component.html'
  }
)
export class PostCreateComponent {
  // tslint:disable-next-line:variable-name
    new_post = 'this is sample';
  // tslint:disable-next-line:typedef
    onAddPost() {
    alert(this.new_post);
  }
}
