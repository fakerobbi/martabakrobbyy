<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
    public function index(){
        $data['branches'] = Branch::all();
        return view('branch',$data);
    }
}
