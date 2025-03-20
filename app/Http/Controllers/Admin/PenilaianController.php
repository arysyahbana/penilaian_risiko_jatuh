<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResikoJatuh;
use Exception;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    private function validateData(Request $request){
        return $request->validate([
            'no_mr' => 'required',
            'ruangan' => 'required',
            'bed' => 'required',
            'nama' => 'required',
            'risiko_jatuh' => 'required',
        ], [
            'no_mr.required' => 'Nama pasien wajib diisi.',
            'ruangan.required' => 'Ruangan pasien wajib diisi.',
            'bed.required' => 'Bed pasien wajib diisi.',
            'nama.required' => 'Nama pasien wajib diisi.',
            'risiko_jatuh.required' => 'Tingkat resiko jatuh pasien wajib diisi.',
        ]);
    }
    public function index()
    {
        $page = "penilaian";
        $data = ResikoJatuh::all();
        return view('admin.pages.penilaian.index', compact('page', 'data'));
    }

    public function create()
    {
        $page = "penilaian";
        return view('admin.pages.penilaian.add', compact('page'));
    }

    public function store(Request $request){
        try{
            $data = $this->validateData($request);
            ResikoJatuh::create($data);
            return redirect()->route('penilaian.show')->with('success', 'Data penilaian berhasil ditambahkan.');
        }catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($no_mr)
    {
        $page = "penilaian";
        $data = ResikoJatuh::where('no_mr', $no_mr)->first();
        return view('admin.pages.penilaian.edit', compact('page','data'));
    }

    public function update($no_mr,Request $request){
        try{
            $data = $this->validateData($request);
            ResikoJatuh::updateOrCreate(['no_mr' => $no_mr],$data);
            return redirect()->route('penilaian.show')->with('success', 'Data penilaian berhasil diupdate.');
        }catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($no_mr){
        ResikoJatuh::where('no_mr', $no_mr)->delete();
        return back()->with('success','Data penilaian berhasil dihapus.');
    }
}
