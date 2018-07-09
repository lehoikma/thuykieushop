<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::all();
        return view('admin.news_index', ['tags' => $tags]);
    }

    public function add(Request $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);
        News::create([
            'title' => $request['name_seo'],
            'content' => $request['content'],
            'news_image' => $filename,
            'slug' => str_slug($request['name_seo']),
            'status' => $request['km'] or 0,
            'description' => $request['description'],
            'key_word' => $request['key_word'],
            'name_seo' => $request['name_seo'],
            'status_display' => $request['status']
        ]);
        return redirect()->route('news_list');
    }

    public function listNews()
    {
        $news = News::orderBy('id', 'desc')->paginate(15);
        return view('admin.list_news', ['news' => $news]);
    }

    public function deleteNews(Request $request)
    {
        News::destroy($request['id']);
        return redirect()->route('news_list');
    }

    public function editNews($id)
    {
        $news = News::find($id);
        if (!empty($news)) {
            return view('admin.news_edit', ['news' => $news]);
        }
        return redirect()->route('admin_top');

    }

    public function editSaveNews(Request $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else{
            $products = News::where('id', $request['idNews'])->first();
            $filename = $products['news_image'];
        }

        News::where('id', $request['idNews'])
            ->update([
                'title' => $request['name_seo'],
                'content' => $request['content'],
                'news_image' => $filename,
                'slug' => str_slug($request['name_seo']),
                'status' => $request['km'] or 0,
                'description' => $request['description'],
                'key_word' => $request['key_word'],
                'name_seo' => $request['name_seo'],
                'status_display' => $request['status']
            ]);
        return redirect()->route('news_list');
    }
}
