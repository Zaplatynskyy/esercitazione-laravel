<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;

class ComputerController extends Controller
{
    public function index() {
        $computers = Computer::all();

        return view('home', compact('computers'));
    }
}
