<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Str;
use Auth;
use Storage;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $articles = Article::where('title', 'LIKE',"%$search%")->orderBy('id','desc')->paginate(10);
        $articles->appends(['search'=>$search]);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|file'
        ]);
        
        $photo = $request->file('thumbnail');
        $image_extension = $photo->extension();
        $image_name = Str::slug($request->title).".".$image_extension;
        $photo->storeAs('/images/articles', $image_name, 'public');

        $article = new Article;
        $article->title = $request->title;
        $article->author_id = Auth::user()->id;
        $article->content = $request->content;
        $article->thumbnail_image_name = $image_name;
        $article->save();

        session()->flash('success',"Sukses tambah artikel $request->name");
        return redirect()->route('admin.articles.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|file'
        ]);
        
        
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        if($request->hasFile('thumbnail')) {
            Storage::delete('public/images/articles/'.$article->image_name);
            $photo = $request->file('thumbnail');
            $image_extension = $photo->extension();
            $image_name = Str::slug($request->name).".".$image_extension;
            $photo->storeAs('/images/articles', $image_name, 'public');
            $article->thumbnail_image_name = $image_name;
        }
        $article->save();

        session()->flash('success',"Sukses ubah Artikel $request->name");
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        Storage::delete('public/images/articles/'.$article->thumbnail_image_name);
        $article->delete();

        session()->flash('success', 'Sukses Menghapus Data');
        return redirect()->back();
    }
}
