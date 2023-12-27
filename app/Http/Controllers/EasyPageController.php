<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class EasyPageController extends Controller
{
    public function policy() {
        return view('policy');
    }

    public function thencs() {
        return view('thencs');
    }

    public function contacts() {
        return view('contacts');
    }

    public function about() {
        return view('about');
    }

    public function event() {
        return view('event');
    }

    public function faq() {
        return view('faq');
    }

    public function gk() {
        return view('gk');
    }

    public function melnitsa() {
        return view('melnitsa');
    }

}
