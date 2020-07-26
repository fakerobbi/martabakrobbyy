<?php

namespace App\Http\Controllers;
use App\Branch;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    Public function index(){
        $data['branches'] = Branch::paginate(3);
        $data['menus'] = Menu::orderBy('product_price','asc')->get();
        return view('menu',$data);
    }
}
