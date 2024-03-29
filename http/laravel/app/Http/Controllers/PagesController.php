<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function upload()
    {
        return view('pages.upload');
    }

    public function download()
    {
        return view('pages.login');
    }

    public function createaccount()
    {
        return view('pages.createaccount');
    }
}
