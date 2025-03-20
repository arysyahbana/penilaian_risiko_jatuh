@extends('admin.app')

@section('title', 'Tambah Penilaian Risiko Jatuh')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <h6>Tambah Penilaian Risiko Jatuh</h6>
                <div class="card mb-4">
                    <div class="card-body px-5 pt-4 pb-2">
                        <form action="{{ route('penilaian.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <x-admin.input type="text" placeholder="No MR" label="No MR" name="no_mr"/>

                                <x-admin.input type="text" placeholder="Ruangan" label="Ruangan" name="ruangan" />

                                <x-admin.input type="number" placeholder="Bed" label="Bed" name="bed" />

                                <x-admin.input type="text" placeholder="Nama" label="Nama" name="nama" />

                                <label for="risiko_jatuh">Risiko Jatuh</label>
                                <select class="form-select" aria-label="Default select example" id="risiko_jatuh" name="risiko_jatuh">
                                    <option selected hidden>Pilih Risiko Jatuh</option>
                                    <option value="Rendah">Rendah</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Tinggi">Tinggi</option>
                                </select>

                                <x-admin.input type="date" placeholder="Tanggal" label="Tanggal" name="tanggal" />

                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
