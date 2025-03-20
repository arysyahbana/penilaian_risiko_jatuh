<?php

namespace App\Http\Controllers;

use App\Models\ResikoJatuh;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $data = ResikoJatuh::paginate(10);
        return view('user.pages.penilaian.index', compact('data'));
    }

    public function search(Request $request)
    {
        $query = ResikoJatuh::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('no_mr', 'LIKE', "%$search%")
                    ->orWhere('ruangan', 'LIKE', "%$search%")
                    ->orWhere('bed', 'LIKE', "%$search%")
                    ->orWhere('nama', 'LIKE', "%$search%")
                    ->orWhere('risiko_jatuh', 'LIKE', "%$search%");
            });
        }

        $data = $query->paginate(10);

        return view('user.pages.penilaian.index', compact('data'));
    }

}
