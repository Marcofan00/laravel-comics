<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    private $menu = ['CHARACTER','COMICS','MOVIE','TV','GAMES','FANS','NEWS','SHOP'];

        public function home() {
            $menu = $this ->menu;
            return view('pages.home', compact('menu'));
        }

        public function detail() {
            $menu = $this ->menu;
            return view('pages.detail', compact('menu'));
        }
}
