<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index(Request $request)
    {
        return view('docs.index');
    }

    public function show(Request $request)
    {
        return;
    }
}
