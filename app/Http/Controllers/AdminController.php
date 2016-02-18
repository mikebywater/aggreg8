<?php

namespace App\Http\Controllers;

use App\Article;
use App\PageView;
use App\Source;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = Source::all();
        $articleCount = Article::count();
        $pageViews = PageView::count();
        $dailyViews = PageView::today()->count();
        return view('admin.index')->with(["sources" => $sources , "articleCount" => $articleCount, "pageViews" => $pageViews, "dailyViews" => $dailyViews]);
    }


}
