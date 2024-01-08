import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';

interface Subreddit {
  id: string;
  display_name: string;
  subscribers: number;
  public_description: string;
  title: string;
  icon_img: string;
  created_at: string;
  updated_at: string;
}

@Component({
  selector: 'app-subreddit-list',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './subreddit-list.component.html',
  styleUrl: './subreddit-list.component.css',
})
export class SubredditListComponent implements OnInit {
  subreddits: Subreddit[] = [];

  constructor(private http: HttpClient) {}

  ngOnInit(): void {
    this.http
      .get<Subreddit[]>('http://localhost:8000/api/reddit-topics')
      .subscribe((data) => {
        this.subreddits = data;
      });
  }
}
