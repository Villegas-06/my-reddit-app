import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-subreddit-detail',
  standalone: true,
  imports: [],
  templateUrl: './subreddit-detail.component.html',
  styleUrl: './subreddit-detail.component.css',
})
export class SubredditDetailComponent implements OnInit {
  subreddit: any = {};

  constructor(private route: ActivatedRoute, private http: HttpClient) {}

  ngOnInit(): void {
    const subredditNombre = this.route.snapshot.params['id'];
    this.http
      .get<any>(`http://localhost:8000/api/reddit-topics/${subredditNombre}`)
      .subscribe((data) => {
        this.subreddit = data;
        console.log(this.subreddit);
      });
  }
}
