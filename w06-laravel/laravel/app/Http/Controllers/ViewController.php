<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function example()
    {
        return view('view.example', ['foo' => 'bar']);
//        return View::make('view.example', ['foo' => 'bar']);
    }
}
