<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{
    use HasFactory;

    protected $table = 'subreddits';

    public $timestamps = false;

    protected $fillable = ['id', 'display_name', 'subscribers', 'description', 'url_detail'];


}
