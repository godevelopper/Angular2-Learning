import { Injectable, Component, OnInit } from '@angular/core';
import {Http, Response} from '@angular/http';


@Component({
  selector: 'my-app',
  template: `<ul>
		<li *ngFor="let person of data">
		   {{person.id}} - {{person.first_name}}
		</li>
	     </ul>`
})


export class AppComponent implements OnInit{

  private data: string;

  constructor(private http: Http){ }

  ngOnInit(){
    this.getData();
  }

  getData(){
    this.http
        .get('http://localhost/php-localhost/index.php')
        .subscribe(res => this.data = res.json());
  }
}
