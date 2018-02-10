<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\News;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $projects = Project::all();
        //dd($projects);
        return view('home', ['projects' => $projects]);
    }

    public function about(){
        $news = News::all();
        return view('about', ['news' => $news]);
    }

    public function newsSingle($id){
        //$id = 4;
        $news = News::where('id',$id)->first();
        //dd($news);
        return view('newsSingle', ['news' => $news]);
    }
}
