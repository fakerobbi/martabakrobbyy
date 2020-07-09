<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galleries'] = Gallery::all();
        return view('backend.gallery.index',$data);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::all();
        return view('backend.gallery.create',$data);
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
            'Picture_name', 'description' => 'required',
        ]);

        $gallery = new Gallery;
        $gallery->picture_name = $request->picture_name;
        $gallery->description = $request->description;
        

        if ($request->file('input_picture')) {
            $fileGet = $request->input_picture;
            $fileName = $fileGet->getClientOriginalName();
            $move = $fileGet->move('uploads/gallery', $fileName);
            $gallery->input_picture = $fileName;
        }
        
        $gallery->save();
        alert()->success('Gambar Berhasil Ditambahkan', 'Sukses');
        return redirect()->route('admin.gallery.index');
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
        $data['users'] = User::all();

        $items = Gallery::findOrFail($id);
        return view(
            'backend.gallery.edit',
            [
                'items' => $items
            ],
            $data
        );
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
        if ($request->file('input_picture')) {
            $fileGet = $request->input_picture;
            $fileName = $fileGet->getClientOriginalName();
            $move = $fileGet->move('uploads/gallery', $fileName);
        }
        
        Gallery::where('id', $id)
            ->update([
                'picture_name' => $request->picture_name,
                'description' => $request->description
            ]);

        alert()->success('Gallery Berhasil DiUbah', 'Sukses');
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($request->id);
        $gallery->delete();
        alert()->success('Menu Berhasil Dihapus', 'Sukses');
        return redirect()->route('admin.gallery.index');
    }
}
