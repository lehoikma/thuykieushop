<?php

namespace App\Http\Controllers\Member;

use App\Models\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $id)
    {
        $news = News::find($id);
        $newsAll = News::where('status_display', 1)->limit(5)->orderBy('id', 'desc')->get();
        if (empty($news)) {
            return redirect()->route('home');
        }
        return view('member.news_index', ['news' => $news, 'newsAll' => $newsAll]);
    }

    public function getAll()
    {
        $news = News::where('status_display', 1)->paginate(15);
        return view('member.news_all', ['news' => $news]);
    }

}
