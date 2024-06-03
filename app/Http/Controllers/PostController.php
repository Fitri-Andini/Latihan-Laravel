<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\view\view;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return view
     */
    public function index(): View
    {
        //Kirim data post ke view
        return view('posts.index');
    }
}