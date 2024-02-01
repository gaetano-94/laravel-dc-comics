<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ComicController extends Controller
{
    public function index()
    {
        return view('comics');
    }
}
