<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $computers = Computer::all();
        return view('index',compact('computers'));
    }

    public function admin($computer = null) {
       /* $computerInfo = Computer::where('name',$computer)->first();*/
        return view('admin'/*,['computer' => $computerInfo]*/);
    }
}
