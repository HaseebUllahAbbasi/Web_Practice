import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-post-list',
  templateUrl: './post-list.component.html',
  styleUrls: ['./post-list.component.css']
})
export class PostListComponent implements OnInit
{
  posts = [
    {title: 'first post', content: 'this is content'},
    {title: 'first post', content: 'this is content'}, {title: 'first post', content: 'this is content'}
  ];
  constructor() { }
  ngOnInit(): void {
  }

}
