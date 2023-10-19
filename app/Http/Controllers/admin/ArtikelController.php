<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('admin.article.index', [
            'articles' => Article::all()
        ]);
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;

        if ($request->hasFile('image')) {
            $folder = 'article';
            $extension = $request->file('image')->extension();
            $name = Str::random(10);
            $url = $request->file('image')->storeAs($folder, "$name ." . $extension);
            $article->image = $url;
            $article->save();
        }

        return redirect('admin/article')->with('success', 'successful add article');
    }

    public function show(Article $article)
    {
        return view('admin.article.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit', [
            'article' => $article
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $article->title = $request->title;
        $article->description = $request->description;

        if ($request->hasFile('image')) {

            $path = public_path($article->image);
            if (file_exists($path)) {
                unlink($path);
            }


            $folder = 'article';
            $extension = $request->file('image')->extension();
            $name = Str::random(10);
            $url = $request->file('image')->storeAs($folder, "$name ." . $extension);
            $article->image = $url;
        }
        $article->save();

        return redirect('admin/article')->with('warning', 'successful edit article');
    }

    public function delete(Article $article){
        $path = public_path($article->image);
        if (file_exists($path)) {
            unlink($path);
        }

        $article->delete();

        return redirect('admin/article')->with('danger', 'successful delete article');

    }
}
