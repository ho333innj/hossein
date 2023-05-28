<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class AdminAdvertController extends Controller
{
    public function index()
    {
        $adverts=Advert::all();
         return view('Admin.Adverts.index' , ['adverts' => $adverts]);

     }
}
