<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use App\User;
use Alert;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menus'] = Menu::all();
        return view('backend.menu.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::all();
        return view('backend.menu.create',$data);
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
            'product_name', 'product_price', 'category', 'description' => 'required',
        ]);

        $menu = new Menu;
        $menu->product_name = $request->product_name;
        $menu->product_price = $request->product_price;
        $menu->category = $request->category;
        $menu->description = $request->description;
        $menu->save();
        
        alert()->success('Menu Berhasil Ditambahkan', 'Sukses');
        return redirect()->route('admin.menu.index');
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

        $items = Menu::findOrFail($id);
        return view(
            'backend.menu.edit',
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
        Menu::where('id', $id)
            ->update([
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'category' => $request->category,
                'description' => $request->description
            ]);

        alert()->success('Menu Berhasil DiUbah', 'Sukses');
        return redirect()->route('admin.menu.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $menu = Menu::findOrFail($request->id);
        $menu->delete();
        alert()->success('Menu Berhasil Dihapus', 'Sukses');
        return redirect()->route('admin.menu.index');
    }
}
