<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Subreddit;
use App\Models\SubredditDetail;


class RedditController extends Controller
{
    public function fetchDataAndStore()
    {
        $redditData = \Illuminate\Support\Facades\Http::get('https://www.reddit.com/reddits.json')->json();

        foreach ($redditData['data']['children'] as $child) {
            $subreddit = Subreddit::updateOrCreate(
                ['id' => $child['data']['id']],
                [
                    'display_name' => $child['data']['display_name'],
                    'subscribers' => $child['data']['subscribers'],
                    'description' => $child['data']['public_description'],
                    'url_detail' => $child['data']['url'],
                ]
            );

            SubredditDetail::updateOrCreate(
                ['subreddit_id' => $child['data']['id']],
                [
                    'public_description_html' => $child['data']['public_description_html'],
                    'description' => $child['data']['description'],
                    'banner_img' => $child['data']['banner_img'],
                ]
            );
        }

        return response()->json(['message' => 'Data fetched and stored successfully.']);
    }
}
