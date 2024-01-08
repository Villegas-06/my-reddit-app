<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubredditDetail extends Model
{
    use HasFactory;

    protected $table = 'subreddit_details';

    public $timestamps = true;

    protected $fillable = ['id', 'subreddit_id', 'public_description_html', 'description', 'banner_img'];
}
