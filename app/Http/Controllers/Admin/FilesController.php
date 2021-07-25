<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\File;
Use Illuminate\Support\Facades\Storage;
Use Intervention\Image\Facades\Image;
Use Illuminate\Support\Str;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=File::where('user_id',auth()->user()->id)->paginate(10);
        return view ('admin.files.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);

        */

        $request->validate([
            'file'=>'required|image'
        ]);
        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();
        $ruta = storage_path() . '\app\public\imagenes/' . $nombre;
        Image::make($request->file('file'))
        ->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($ruta);
        File::create([
            'user_id'=> auth()->user()->id,
            'url'=>'/storage/imagenes/'.$nombre
        ]);
        
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($file)
    {
        return view ('admin.files.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($file)
    {
        return view ('admin.files.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $url=str_replace('storage','public',$file->url);
        Storage::delete($url);

        $file->delete();
        return redirect()->route('admin.files.index');
    }
}
