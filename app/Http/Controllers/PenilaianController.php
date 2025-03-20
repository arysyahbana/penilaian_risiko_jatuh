<?php

namespace App\Http\Controllers;

use App\Models\ResikoJatuh;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $data = ResikoJatuh::paginate(10);
        return view('user.pages.penilaian.index',compact('data'));
    }


}
