@extends('admin.app')

@section('title', 'Edit Penilaian Risiko Jatuh')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <h6>Edit Penilaian Risiko Jatuh</h6>
                <div class="card mb-4">
                    <div class="card-body px-5 pt-4 pb-2">
                        <form action="{{ route('penilaian.update', $data->no_mr) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <x-admin.input type="text" placeholder="No MR" label="No MR" name="no_mr" value="{{ $data->no_mr ?? '' }}"/>

                                <x-admin.input type="text" placeholder="Ruangan" label="Ruangan" name="ruangan" value="{{ $data->ruangan ?? '' }}"/>

                                <x-admin.input type="number" placeholder="Bed" label="Bed" name="bed" value="{{ $data->bed ?? '' }}" />

                                <x-admin.input type="text" placeholder="Nama" label="Nama" name="nama" value="{{ $data->nama ?? '' }}" />

                                <label for="risiko_jatuh">Risiko Jatuh</label>
                                <select class="form-select" aria-label="Default select example" id="risiko_jatuh" name="risiko_jatuh">
                                    <option selected hidden>Pilih Risiko Jatuh</option>
                                    @foreach (['Rendah', 'Sedang', 'Tinggi'] as $resiko_jatuh)
                                        <option value="{{ $resiko_jatuh }}" {{ $data->risiko_jatuh == $resiko_jatuh ? 'selected' : '' }}>{{ $resiko_jatuh }}</option>
                                    @endforeach
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
