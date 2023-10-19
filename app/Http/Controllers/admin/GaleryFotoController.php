<?php

namespace App\Http\Controllers\admin;

use App\Models\Galery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleryFotoController extends Controller
{
    public function index()
    {
        return view('admin.galery.index', [
            'galery' => Galery::all()
        ]);
    }
    public function create()
    {
        return view('admin.galery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);

        $galery = new Galery();
        $galery->title = $request->title;
        if ($request->hasFile('image')) {
            $folder = 'galery';
            $extension = $request->file('image')->extension();
            $name = Str::random(10);
            $url = $request->file('image')->storeAs($folder, "$name ." . $extension);
            $galery->image = $url;
            $galery->save();
        }

        return redirect('admin/galery-foto')->with('success', 'successful add galery');
    }
    public function delete(Galery $galery)
    {
        $path = public_path($galery->image);
        if (file_exists($path)) {
            unlink($path);
        }

        $galery->delete();
        return redirect('admin/galery-foto')->with('danger', 'successful delete foto');
    }
}
