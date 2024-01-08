import { Routes } from '@angular/router';
import { SubredditListComponent } from './subreddit-list/subreddit-list.component';
import { SubredditDetailComponent } from './subreddit-detail/subreddit-detail.component';

export const routes: Routes = [
  { path: '', component: SubredditListComponent },
  { path: 'subreddit/:id', component: SubredditDetailComponent },
];
