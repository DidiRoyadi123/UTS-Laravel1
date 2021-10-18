<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class cobacontroller extends Controller
{


    public function index()
    {
        $friends = friends::paginate(1);
        return view('index', compact('friends'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {


        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;

        $friends->save();
    }
}
