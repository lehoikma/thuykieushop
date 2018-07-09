<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags_index');
    }

    public function saveTags(Request $request)
    {
        Tags::create([
            'name' => $request['name']
        ]);
        return redirect()->route('tag_list');
    }

    public function listTags()
    {
        $tags = Tags::orderBy('id', 'desc')->paginate(20);
        return view('admin.tags_list', ['tags' => $tags]);
    }

    public function deleteTags(Request $request)
    {
        Tags::destroy($request['id']);
        return redirect()->route('tag_list');
    }

    public function editTags($id)
    {
        $tag = Tags::find($id);
        return view('admin.tags_edits', ['tag' => $tag]);
    }

    public function saveEditTags(Request $request)
    {
        Tags::where('id', $request['idTags'])
            ->update([
                'name' => $request['name'],
            ]);
        return redirect()->route('tag_list');
    }
}
