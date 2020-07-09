<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Branch;
use App\Gallery;
use Illuminate\Http\Request;
use Alert;

class IndexController extends Controller
{
    public function index(){
        $data['menus'] = Menu::orderBy('product_price','asc')->get();
        $data['branches'] = Branch::all();
        $data['galleries'] = Gallery::all();

        return view('index',$data);
    }
}
