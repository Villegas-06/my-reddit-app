import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { MatButtonModule } from '@angular/material/button';
import { MatCardModule } from '@angular/material/card';

@Component({
  selector: 'app-subreddit-detail',
  standalone: true,
  imports: [MatCardModule, MatButtonModule, CommonModule],
  templateUrl: './subreddit-detail.component.html',
  styleUrl: './subreddit-detail.component.css',
})
export class SubredditDetailComponent implements OnInit {
  subreddit: any = {};
  headerStyle: any = {};

  constructor(private route: ActivatedRoute, private http: HttpClient) {}

  ngOnInit(): void {
    const subredditNombre = this.route.snapshot.params['id'];
    this.http
      .get<any>(`http://localhost:8000/api/reddit-topics/${subredditNombre}`)
      .subscribe((data) => {
        this.subreddit = data;
        this.headerStyle = {
          'background-image': `url(${this.subreddit.community_icon})`,
          'background-size': 'cover',
          'background-position': 'center',
        };
        console.log(this.subreddit);
      });
  }
}
