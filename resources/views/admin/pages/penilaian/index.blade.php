@extends('admin.app')

@section('title', 'Penilaian Risiko Jatuh')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <h6>Data Penilaian Risiko Jatuh</h6>
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <a href="{{ route('penilaian.create') }}" class="btn bg-gradient-success">
                            <i class="fa fa-plus"></i>
                            <span class="text-capitalize ms-1">Tambah</span>
                        </a>
                    </div>
                    <div class="card-body px-5 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <x-admin.table id="datatable">
                                @slot('header')
                                    <tr>
                                        <x-admin.th>No</x-admin.th>
                                        <x-admin.th>No MR</x-admin.th>
                                        <x-admin.th>Ruangan</x-admin.th>
                                        <x-admin.th>Bed</x-admin.th>
                                        <x-admin.th>Nama</x-admin.th>
                                        <x-admin.th>Risiko Jatuh</x-admin.th>
                                        <x-admin.th>Tanggal Input</x-admin.th>
                                        <x-admin.th>Action</x-admin.th>
                                    </tr>
                                @endslot
                                @foreach ($data as $item)
                                    <tr>
                                        <x-admin.td>{{ $loop->iteration }}</x-admin.td>
                                        <x-admin.td>{{ $item->no_mr ?? ''}} </x-admin.td>
                                        <x-admin.td>{{$item->ruangan ?? ''}}</x-admin.td>
                                        <x-admin.td> {{ $item->bed ?? '' }} </x-admin.td>
                                        <x-admin.td> {{ $item->nama ?? '' }} </x-admin.td>
                                        <x-admin.td> {{ $item->risiko_jatuh ?? '' }} </x-admin.td>
                                        <x-admin.td> {{ $item->tanggal ?? '' }} </x-admin.td>
                                        <x-admin.td>
                                            <a href="{{ route('penilaian.edit', $item->no_mr) }}" class="btn bg-gradient-info">
                                                <i class="fa fa-pencil"></i>
                                                <span class="text-capitalize ms-1">Edit</span>
                                            </a>
                                            <a href="#" class="btn bg-gradient-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapusMateri{{ $item->no_mr }}"><i class="fa fa-trash"
                                                    aria-hidden="true"></i><span
                                                    class="text-capitalize ms-1">Hapus</span></a>
                                        </x-admin.td>

                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="hapusMateri{{ $item->no_mr }}" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusMateriLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="hapusMateriLabel">Hapus Data
                                                            Penilaian Risiko Jatuh
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="{{ asset('dist/assets/img/bin.gif') }}" alt=""
                                                            class="img-fluid w-25">
                                                        <p>Yakin ingin menghapus data?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ route('penilaian.destroy', $item->no_mr) }}" type="submit"
                                                            class="btn btn-sm btn-danger">Hapus</a>
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </x-admin.table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
