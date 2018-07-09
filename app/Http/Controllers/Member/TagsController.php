<?php

namespace App\Http\Controllers\Member;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Models\Tags;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tags = Tags::find($id);
        return view('member.tags_index', ['tags' => $tags]);
    }

}
