import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SubredditDetailComponent } from './subreddit-detail.component';

describe('SubredditDetailComponent', () => {
  let component: SubredditDetailComponent;
  let fixture: ComponentFixture<SubredditDetailComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SubredditDetailComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(SubredditDetailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
