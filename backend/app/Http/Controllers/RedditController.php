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
                    'title' => $child['data']['title'],
                    'display_name' => $child['data']['display_name'],
                    'subscribers' => $child['data']['subscribers'],
                    'icon_img' => $child['data']['icon_img'],
                    'public_description' => $child['data']['public_description'],
                ]
            );

            SubredditDetail::updateOrCreate(
                ['subreddit_id' => $child['data']['id']],
                [
                    'title' => $child['data']['title'],
                    'subscribers' => $child['data']['subscribers'],
                    'display_name' => $child['data']['display_name'],
                    'icon_img' => $child['data']['icon_img'],
                    'submit_text' => $child['data']['submit_text'],
                    'banner_img' => $child['data']['banner_background_image'],
                    'community_icon' => $child['data']['icon_img'],
                    'public_description' => $child['data']['public_description'],
                    'description' => $child['data']['description'],

                ]
            );
        }

        return response()->json(['message' => 'Data fetched and stored successfully.']);
    }
}
