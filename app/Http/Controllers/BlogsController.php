<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //File Upload
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/post_images', $filenameToStore);

        } else {
            $filenameToStore = 'defaultblogimage.jpg';
        }

        //Create Blog
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->sub_title = $request->input('sub_title');
        $blog->user_id = auth()->user()->id;
        $blog->author = $request->input('author');
        $blog->description = $request->input('description');
        $blog->image = $filenameToStore;
        $blog->save();
        return redirect()->route('home')->with('success', 'Dein Blog wurde erstellt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //File Upload
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/post_images', $filenameToStore);

        } 

        //Create Blog
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->sub_title = $request->input('sub_title');
        $blog->author = $request->input('author');
        $blog->description = $request->input('description');
        if($request->hasFile('image'))
            $blog->image = $filenameToStore;
        $blog->save();
        return redirect()->route('home')->with('success', 'Die Änderungen wurden gespeichert.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        //Check if correct user
        if(auth()->user()->id !== $blog->user_id){
            return redirect()->back()->with('error', 'Sie sind für diese Aktion nicht autorisiert');
        }
        if($post->image != 'defaultblogimage.jpg'){
            Storage::delete('public/blog_images'.$blog->image);
        }
        $post->delete();
        return redirect()->route('home')->with('success', 'Der Blog wurde gelöscht.');
    }
}
