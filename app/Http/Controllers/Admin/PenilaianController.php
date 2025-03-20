<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $page = "penilaian";
        return view('admin.pages.penilaian.index', compact('page'));
    }

    public function create()
    {
        $page = "penilaian";
        return view('admin.pages.penilaian.add', compact('page'));
    }

    public function edit()
    {
        $page = "penilaian";
        return view('admin.pages.penilaian.edit', compact('page'));
    }
}
