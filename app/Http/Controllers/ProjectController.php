<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;


use Illuminate\Http\Request;
use Session;
use App\Project;


class ProjectController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form()
    {
        return view('addProject');
    }

    public function create(Request $request)
    {

        $validator = validator()->make($request->all(),[
            'title'=>['required'],
            'image'=>['required']
        ]);
       
        if ($validator->passes()) {
            $image = $request->file('image');
            $format = $image->getClientOriginalExtension();
            $intervention = Image::make($request->file('image'))->fit(800, 533);
            
            // calculate md5 hash of encoded image
            $hash = md5($intervention->__toString());
            // use hash as a name
            $path = "uploads/{$hash}".".".$format;
            // save it locally to ~/public/images/{$hash}.jpg
            $intervention->save(public_path($path));

            // $url = "/images/{$hash}.jpg"
            $url = "/" . $path;

            $project = new Project([
                'title' => request()->input('title'),
                'image' => $path
            ]);
            
            $project->save();
            Session::flash('message', 'Project Succesfully Posted!'); 
            //return view('admin')->with('message', 'News Article Added');;
            return redirect()->route('admin');
        }

        return redirect()->back()->withErrors($validator->errors())->withInput();{
            
        }
        return redirect()->route('admin');
    }

    public function edit($id){
        $project = Project::find($id);
        return view('editProject', ['project'=>$project]);
    }

    public function update(Request $request){
       
        $id = $request['id'];
        $project = Project::find($id);

        $validator = validator()->make($request->all(),[
            'title'=>['required'],
        ]);

        if ($validator->passes()) {
            if ($request['image']) {
                $image = $request->file('image');
                $format = $image->getClientOriginalExtension();
                $intervention = Image::make($request->file('image'))->fit(800, 533);
                
                // calculate md5 hash of encoded image
                $hash = md5($intervention->__toString());
                // use hash as a name
                $path = "uploads/{$hash}".".".$format;
                // save it locally to ~/public/images/{$hash}.jpg
                $intervention->save(public_path($path));

                // $url = "/images/{$hash}.jpg"
                $url = "/" . $path;
                $project['title']=$request['title'];
                $project['image']=$path;
                $project->save();
                Session::flash('message', 'Project Succesfully Posted!');
                return redirect()->route('admin');
 
            }
        $project['title']=$request['title'];
        $project['image']=$project->image;
        $project->save();
        Session::flash('message', 'Project Succesfully Posted!'); 
        return redirect()->route('admin');




        }
        return redirect()->back()->withErrors($validator->errors())->withInput();{
        }


    }
    public function delete($id){
        $project = Project::find($id);
        $project -> delete();
        Session::flash('message', 'Project Succesfully Deleted.');
        return redirect()->route('admin');
    }
}
