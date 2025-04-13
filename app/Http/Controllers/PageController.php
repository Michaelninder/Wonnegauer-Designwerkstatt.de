<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Link;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function dates()
    {
        $dates = [];
        if (Date::count() !== 0) {
            $dates = Date::latest()->paginate(6);
        }
        else {
            return view('pages.dates', ['error' => 'Es konnten keine Termine gefunden werden.']);
        }
        return view('pages.dates', ['dates' => $dates]);
    }
    public function links()
    {
        $links = Link::latest()->paginate(6); 

        if ($links->isEmpty()) {
            return view('pages.links', ['error' => 'Es konnten keine Links gefunden werden.']);
        }

        return view('pages.links', ['links' => $links]); 
    }

    public function about()
    {
        return view('pages.about');
    }
    public function art()
    {
        return view('pages.art');
    }
    public function design()
    {
        return view('pages.design');
    }
}
