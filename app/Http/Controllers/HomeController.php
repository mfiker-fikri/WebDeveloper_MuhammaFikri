<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->Galeri = new Galeri();
    // }

    public function index()
    {
        //
        $homes = Article::orderBy('id', 'DESC')->paginate(5);
        return view('layouts.manage.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('layouts.manage.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articles = new Article();

        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $fileName = time() . '-' . $request->image->getClientOriginalExtension();
        // $filePath = $request->file('image')->storeAs('images', $fileName, 'public');
        // $request->path->move(public_path('images'), $fileName);

        // $extension = $request->file('imgupload')->getClientOriginalName();
        // $imgname = date('dmyHis') . '.' . $extension;
        // $this->validate($request, ['imgupload' => 'required|file|max:5000']);
        // $path = Storage::putFileAs('public/images', $request->file('imgupload'), $imgname);
        // Article::create(['path' => $imgname]);

        $articles->category_id = $request->category;
        $articles->title = $request->title;
        $articles->content = $request->content;
        // $articles->path = $filePath;
        $articles->save();
        // return back()->with('success', 'Posting data sukses!');
        return back()->with('success', 'Posting data sukses!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categories = Category::get();
        $articles = Article::find($id);
        return view('layouts.manage.show', compact('categories', 'articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::get();
        $articles = Article::find($id);
        return view('layouts.manage.edit', compact('categories', 'articles'));
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
        //
        // $articles = Article::whereId($id)->first;
        // $articles->update([
        //     'category_id' => $request->category,
        //     'title' => $request->title,
        //     'content' => $request->content,
        // ]);

        $articles = Article::find($request->id);
        $articles->category_id = $request->category;
        $articles->title = $request->title;
        $articles->content = $request->content;
        // $articles->path = $request->path;
        $articles->save();

        return back()->with('success', 'ubah data sukses!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $project = Article::find($id);
        // $project->delete();

        Article::whereId($id)->delete();
        return back()->with('success', 'hapus data sukses!');

        //return view('layouts.manage.delete', compact('project'));
        // return redirect('layouts.manage.index')->with('success', 'ubah data sukses!');
    }
}
