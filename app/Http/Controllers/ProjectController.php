<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Project;


class ProjectController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function form()
    {
        return view('addProject');
    }

    public function create(Request $request)
    {
    	$data = request()->input();
    	//dd($request->file('image'));
        $validator = validator()->make($data,[
            'title'=>['required'],
            'content'=>['required'],
        ]);
        if ($validator->passes()) {
            //Create new post object, populate an array
            $project = new Project([
                'title' => request()->input('title'),
                'content' => request()->input('content'),
                'image' => request()->file('image')
            ]);
            
        $project->save();
        Session::flash('message', 'Project Succesfully Posted!'); 
        //return view('admin')->with('message', 'News Article Added');;
        return view('admin');

        //return View::make('admin', array('message' => 'News Added'));

        }

        return redirect()->back()->withErrors($validator->errors())->withInput();{
            
        }
    	//dd($request);
        //return view('addNews');
    }
}
