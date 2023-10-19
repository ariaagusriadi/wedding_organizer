<?php

namespace App\Http\Controllers\admin;

use App\Models\Jasa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JasaPerushaanController extends Controller
{
    public function index()
    {
        return view('admin.jasaperusahaan.index', [
            'products' => Jasa::all()
        ]);
    }

    public function create()
    {
        return view('admin.jasaperusahaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "price" => "required",
            "capacity" => "required",
            "location" => "required",
            "image" => "required",
            "description" => "required",
        ]);

        $jasa = new Jasa();
        $jasa->title = $request->title;
        $jasa->price = $request->price;
        $jasa->capacity = $request->capacity;
        $jasa->location = $request->location;
        $jasa->description = $request->description;
        if ($request->hasFile('image')) {
            $folder = 'jasa';
            $extension = $request->file('image')->extension();
            $name = Str::random(10);
            $url = $request->file('image')->storeAs($folder, "$name ." . $extension);
            $jasa->image = $url;
            $jasa->save();
        }

        return redirect('admin/jasa-perushaan')->with('success', 'successful add new product');
    }

    public function show(Jasa $jasa)
    {
        return view('admin.jasaperusahaan.show', [
            'product' => $jasa
        ]);
    }

    public function edit(Jasa $jasa)
    {
        return view('admin.jasaperusahaan.edit', [
            'product' => $jasa
        ]);
    }

    public function update(Request $request, Jasa $jasa)
    {
        $request->validate([
            "title" => "required",
            "price" => "required",
            "capacity" => "required",
            "location" => "required",
            "image" => "required",
            "description" => "required",
        ]);

        $jasa->title = $request->title;
        $jasa->price = $request->price;
        $jasa->capacity = $request->capacity;
        $jasa->location = $request->location;
        $jasa->description = $request->description;
        if ($request->hasFile('image')) {

            $path = public_path($jasa->image);
            if (file_exists($path)) {
                unlink($path);
            }

            $folder = 'jasa';
            $extension = $request->file('image')->extension();
            $name = Str::random(10);
            $url = $request->file('image')->storeAs($folder, "$name ." . $extension);
            $jasa->image = $url;
        }
        $jasa->save();


        return redirect('admin/jasa-perushaan')->with('warning', 'successful edit product');
    }


    public function delete(Jasa $jasa)
    {
        $path = public_path($jasa->image);
        if (file_exists($path)) {
            unlink($path);
        }

        $jasa->delete();
        return redirect('admin/jasa-perushaan')->with('danger', 'successful delete product');

    }
}
