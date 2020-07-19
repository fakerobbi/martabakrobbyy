<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Branch;
use App\Message;
use App\Gallery;
use Alert;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['menus'] = Menu::all()->count();
        $data['branches'] = Branch::all()->count();
        $data['messages'] = Message::paginate(3);
        $data['messagess'] = Message::all()->count();
        $data['galleries'] = Gallery::all()->count();
        alert()->info('Anda Telah Login', 'Sukses');
        return view ('backend.index',$data);
    }
}
