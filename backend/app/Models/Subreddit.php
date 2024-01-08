<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{
    use HasFactory;

    protected $table = 'subreddits';

    public $timestamps = true;

    protected $fillable = ['id', 'title', 'display_name', 'subscribers', 'public_description', 'icon_img'];


}
