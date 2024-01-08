<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Subreddit;
use App\Models\SubredditDetail;

class TopicsController extends Controller
{
    public function getTopicController(){
        try {
            $topics = DB::select('SELECT * FROM subreddits');

            return $topics;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener los temas.'], 500);
        }
    }

    public function getTopicId(Request $request){
        try{

            $topic_id = $request->id;

            $topic_detail = SubredditDetail::where('subreddit_id', $topic_id)->get();

            return $topic_detail;

        }catch(\Execption $e){
            return response()->json(['error' => 'Error al obtener el detalle.'], 500);
        }
    }
}
