<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Branch;
use Illuminate\Http\Request;
use Alert;

class IndexController extends Controller
{
    public function index(){
        $data['menus'] = Menu::paginate(3);
        $data['branches'] = Branch::paginate(3);
        return view('index',$data);
    }
}
