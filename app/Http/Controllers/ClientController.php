<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Galery;
use App\Models\Jasa;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function about()
    {
        return view('client.about');
    }

    public function product()
    {
        return view('client.products', [
            'products' => Jasa::all()
        ]);
    }

    public function product_show(Jasa $jasa)
    {
        return view('client.product', [
            'product' => $jasa
        ]);
    }

    public function galery()
    {
        return view('client.galery', [
            'galery' => Galery::all()
        ]);
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function article()
    {
        return view(
            'client.articles',
            [
                'articles' => Article::all()
            ]
        );
    }

    public function article_show(Article $article)
    {
        return view(
            'client.article',
            [
                'article' => $article
            ]
        );
    }

    public function profile()
    {
        return view('client.profile');
    }
}
