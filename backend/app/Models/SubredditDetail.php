<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubredditDetail extends Model
{
    use HasFactory;

    protected $table = 'subreddit_details';

    public $timestamps = true;

    protected $fillable = ['id', 'subreddit_id',
                            'title', 'subscribers', 'display_name',
                            'submit_text', 'banner_img', 'icon_img',
                            'community_icon', 'public_description', 'description'];
}
