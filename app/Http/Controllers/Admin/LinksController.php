<?php

namespace App\Http\Controllers\Admin;

use App\Models\Links;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = Links::orderBy('id', 'desc')->paginate('20');
        return view('admin.links_index', ['link' => $link]);
    }

    public function linkSave(Request $request)
    {
        Links::create([
            'name' => $request['name'],
            'link' => $request['link']
        ]);
        return redirect()->route('links_index');
    }

    public function linkDelete(Request $request)
    {
        Links::destroy($request['idLink']);
    }

}
