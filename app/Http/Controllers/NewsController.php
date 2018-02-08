<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\News;


class NewsController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function form()
    {
        return view('addNews');
    }

    public function show(){
        $id = 4;
        $news = News::where('id',$id)->first();
        return view('newsSingle', ['news' => $news]);
    }


    public function create(Request $request)
    {
        //TESTING WYSIWSG
        //dd($request);
        // $content = $request['content'];
        // return view('output', ['content' => $content]);
    	//dd($request['content']);
        $data = request()->input();
    	//dd($request->file('image'));
        $validator = validator()->make($data,[
            'title'=>['required'],
            'content'=>['required'],
        ]);
        if ($validator->passes()) {
            //Create new post object, populate an array
            $news = new News([
                'title' => request()->input('title'),
                'content' => request()->input('content'),
                'image' => "test.jpg"
            ]);
            
        $news->save();
        Session::flash('message', 'News Article Succesfully Posted!'); 
        //return view('admin')->with('message', 'News Article Added');;
        return view('admin');

        //return View::make('admin', array('message' => 'News Added'));

        }

        return redirect()->back()->withErrors($validator->errors())->withInput();{
            
        }
    	dd($request);
        return view('addNews');
    }
}
