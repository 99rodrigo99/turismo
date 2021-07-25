<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.inicio');
    }

    public function tours()
    {
        return view('user.tour');
    }

    public function hoteles()
    {
        return view('user.hotel');
    }

    public function blog()
    {
        return view('user.blog');
    }

    
}
