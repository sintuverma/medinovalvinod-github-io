<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blogGridPage()
    {
        return view('frontendLayout.blog');
    }
    public function blogDetailPage()
    {
        return view('frontendLayout.detail');
    }
    public function teamPage()
    {
        return view('frontendLayout.team');
    }
    public function testimonialPage()
    {
        return view('frontendLayout.team');
    }
    public function searchPage()
    {
        return view('frontendLayout.search');
    }
}
