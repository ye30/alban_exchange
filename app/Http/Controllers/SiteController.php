<?php

namespace App\Http\Controllers;

use App\Application;
use App\Comment;
use App\News;
use App\Rate;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $currency  = [];
        $data = simplexml_load_file('https://nationalbank.kz/rss/rates.xml');
        foreach ($data->channel->item as $item){
            $index = (string)$item->index;
            array_push($currency, [
                'title' => (string)$item->title,
                'price' => (string)$item->description,
                'color' => $this->getColor($index),
                'change' => (string)$item->change
            ]);
        }

        $news = News::latest()->limit(3)->get();
        $reviews = Comment::latest()->limit(3)->get();
        return view('frontend.index', [
            'currency' => $currency,
            'news' => $news,
            'reviews' => $reviews
        ]);
    }

    public function getColor($index){
        switch ($index){
            case 'UP' :
                return '#5afc03';
                break;
            case 'DOWN' :
                return '#fc0345';
                break;
            default :
                return '#f8ffc4';
        }
    }

    public function getClass($index){
        switch ($index){
            case 'UP' :
                return 'zmdi-trending-up';
                break;
            case 'DOWN' :
                return 'zmdi-trending-down';
                break;
            default :
                return 'zmdi-trending-flat';
        }
    }

    public function news(){
        $news = News::latest()->get();
        return view('frontend.news', compact('news'));
    }

    public function newsById(News $news){
        $newsRecent = News::latest()
            ->where('id', '<>', $news->id)
            ->limit(3)
            ->get();
        return view('frontend.newsById', compact('news'), compact('newsRecent'));
    }

    public function rates(){
        $rates  = [];
        $data = simplexml_load_file('https://nationalbank.kz/rss/rates_all.xml');
        foreach ($data->channel->item as $item){
            $index = (string)$item->index;
            array_push($rates, [
                'title' => (string)$item->title,
                'price' => (string)$item->description,
                'color' => $this->getColor($index),
                'class' => $this->getClass($index),
                'change' => ($index == 'DOWN' || $index == 'UP') ? substr((string)$item->change, 1) : (string)$item->change
            ]);
        }
        $localRates = Rate::orderBy('id', 'desc')->first();
        return view('frontend.rates', compact('rates'), compact('localRates'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function reviews(){
        $comments = Comment::latest()->get();
        return view('frontend.review', compact('comments'));
    }

    public function newComment(Request $request){
        try {
            $comment = new Comment();
            $comment->first_name = $request->firstName;
            $comment->last_name = $request->lastName;
            $comment->message = $request->message;
            $comment->save();
            return response()->json([
                'success' => true
            ]);
        }catch (\Exception $ex){
            return response()->json([
                'success' => false,
                'errorText' => $ex->getMessage()
            ]);
        }
    }
    public function newApplication(Request $request){
        try {
            $comment = new Application();
            $comment->first_name = $request->firstName;
            $comment->last_name = $request->lastName;
            $comment->phone = $request->phone;
            $comment->curr = $request->requested;
            $comment->count = $request->count;
            $comment->save();
            return response()->json([
                'success' => true
            ]);
        }catch (\Exception $ex){
            return response()->json([
                'success' => false,
                'errorText' => $ex->getMessage()
            ]);
        }
    }
}
