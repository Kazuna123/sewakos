<?php

namespace App\Http\Controllers;
use App\Models\Kos;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $kos = Kos::all();
        return view('admin.index', compact('kos'));
    }
}
