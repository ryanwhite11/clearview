<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


use Session;
use App\News;
use App\Project;


class NewsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form()
    {
        return view('addNews');
    }

    public function admin(){
        $projects = Project::all();
        $news = News::all();
        return view('admin', ['projects' => $projects],['news'=>$news]);
    }


    public function create(Request $request)
    {
        $validator = validator()->make($request->all(),[
            'title'=>['required'],
            'content'=>['required'],
            'image'=>['required']
        ]);
       
        if ($validator->passes()) {
            //$dir = '/uploads';
            $image = $request->file('image');
            $format = $image->getClientOriginalExtension();
            //dd($format);
            $intervention = Image::make($request->file('image'))->fit(800, 533);
            
            // calculate md5 hash of encoded image
            $hash = md5($intervention->__toString());
            // use hash as a name
            $path = "uploads/{$hash}".".".$format;
            // save it locally to ~/public/images/{$hash}.jpg
            $intervention->save(public_path($path));

            // $url = "/images/{$hash}.jpg"
            $url = "/" . $path;
            //dd(request()->input('subtitle'));

            $news = new News([
                'title' => request()->input('title'),
                'subtitle'=>request()->input('subtitle'),
                'content' => request()->input('content'),
                'image' => $path
            ]);

            
            $news->save();
            Session::flash('message', 'News Article Succesfully Posted!'); 
            //return view('admin')->with('message', 'News Article Added');;
            return redirect()->route('admin');
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();{
            
        }
        return redirect()->route('admin');

    }

    public function edit($id){
        $news = News::find($id);
        return view('editNews', ['news'=>$news]);
    }

    public function update(Request $request){
        $id = $request['id'];
        $news = News::find($id);

        $validator = validator()->make($request->all(),[
            'title'=>['required'],
            'subtitle'=>['required'],
            'content'=>['required']
        ]);
        if ($validator->passes()) {
            if ($request['image']) {
                $image = $request->file('image');
                $format = $image->getClientOriginalExtension();
                //dd($format);
                $intervention = Image::make($request->file('image'))->fit(800, 533);
                
                // calculate md5 hash of encoded image
                $hash = md5($intervention->__toString());
                // use hash as a name
                $path = "uploads/{$hash}".".".$format;
                // save it locally to ~/public/images/{$hash}.jpg
                $intervention->save(public_path($path));

                // $url = "/images/{$hash}.jpg"
                $url = "/" . $path;
                $news['image']=$request['image'];
                $news['title']=$request['title'];
                $news['subtitle']=$request['subtitle'];
                $news['content']=$request['content'];
                $news['image']=$path;
                $news->save();
                Session::flash('message', 'News Article Updated!'); 
                return redirect()->route('admin');
            }
            $news['title']=$request['title'];
            $news['subtitle']=$request['subtitle'];
            $news['content']=$request['content'];
            $news['image']=$news->image;
            $news->save();
            Session::flash('message', 'News Article Updated!'); 
            return redirect()->route('admin');


        }
        return redirect()->back()->withErrors($validator->errors())->withInput();{
        }


    }

    public function delete($id){
        $article = News::find($id);
        $article -> delete();
        Session::flash('message', 'Article Succesfully Deleted.');
        return redirect()->route('admin');

    }
}
