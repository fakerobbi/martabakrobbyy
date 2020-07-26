<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Alert;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['branches'] = Branch::all();
        $data['messages'] = Message::paginate(3);
        return view('backend.cabang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::all();
        $data['messages'] = Message::paginate(3);
        return view('backend.cabang.create',$data);
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
            'branch_name', 'person_in_charge', 'phone_number', 'address' => 'required',
        ]);

        $branch = new Branch;
        $branch->branch_name = $request->branch_name;
        $branch->person_in_charge = $request->person_in_charge;
        $branch->phone_number = $request->phone_number;
        $branch->address = $request->address;
        if ($request->file('input_picture')) {
            $fileGet = $request->input_picture;
            $fileName = $fileGet->getClientOriginalName();
            $move = $fileGet->move('uploads/branch', $fileName);
            $branch->input_picture = $fileName;
        }
        $branch->save();
        
        alert()->success('Cabang Berhasil Ditambahkan', 'Sukses');
        return redirect()->route('admin.cabang.create');
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
        $data['messages'] = Message::paginate(3);

        $items = Branch::findOrFail($id);
        return view(
            'backend.cabang.edit',
            [
                'items' => $items
            ],
            $data
        );
        // return $item;
        // return view('backend.cabang.edit', $id);
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
            $move = $fileGet->move('uploads/branch', $fileName);
        }

        Branch::where('id', $id)
            ->update([
                'branch_name' => $request->branch_name,
                'person_in_charge' => $request->person_in_charge,
                'phone_number' => $request->phone_number,
                'address' => $request->address
            ]);

        alert()->success('Cabang Berhasil Diubah', 'Sukses');
        return redirect()->route('admin.cabang.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $branch = Branch::findOrFail($request->id);
        $branch->delete();
        alert()->success('Cabang Berhasil Dihapus', 'Sukses');
        return redirect()->route('admin.cabang.index');
    }
}
