<?php

namespace App\Http\Controllers;
use App\Branch;
use Illuminate\Http\Request;
use Alert;

class ContactController extends Controller
{
    public function index(){
        $data['branches'] = Branch::paginate(3);
        return view('contact',$data);
    }
}
