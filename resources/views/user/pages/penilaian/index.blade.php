@extends('user.layouts.app')
@section('title', 'Data')
@section('content')
    <div class="grid grid-cols-1 gap-4 mx-4 mb-12">
        <div class="bg-white w-full rounded-lg z-50">
            <div class="flex justify-between">
                <div class="min-h-full w-full">
                    <div class="flex items-center">

                        <div
                            class="bg-gradient-to-b from-sky-500 to-sky-300 shadow-xl w-[10%] flex items-center justify-center p-5 rounded-s-lg">
                            <div class="text-3xl md:text-4xl lg:text-6xl font-bold text-white"><i class="fas fa-book"></i>
                            </div>
                        </div>

                        <p class="text-5xl font-semibold text-sky-500 px-12 w-full">Penilaian Risiko Jatuh</p>
                    </div>

                    <div class="px-4 sm:px-12 pt-5 pb-12">
                        {{-- search --}}
                        <div class="flex justify-end w-full z-50">
                            <form method="GET" action="{{ route('penilaian.search') }}">
                                <div class="flex">
                                    <input type="text" name="search" placeholder="Cari Data"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block p-2.5">
                                    <button type="submit"
                                        class="ml-2 px-4 py-2 bg-sky-500 text-white rounded-lg hover:bg-sky-600"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        {{-- end search --}}

                        <div class="border-l-4 border-sky-500 pl-3 sm:pl-6 mt-6 space-y-10">
                            <div class="overflow-x-auto rounded-box border bg-slate-50">
                                <table class="table text-center text-slate-800 shadow">
                                    <!-- head -->
                                    <thead>
                                        <tr class="text-white bg-gradient-to-bl from-sky-500 to-sky-300">
                                            <th>No</th>
                                            <th>No MR</th>
                                            <th>Ruangan</th>
                                            <th>Bed</th>
                                            <th>Nama</th>
                                            <th>Risiko Jatuh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr class="hover:bg-sky-100">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->no_mr ?? '' }}</td>
                                                <td> {{ $item->ruangan ?? '' }} </td>
                                                <td> {{ $item->bed ?? '' }} </td>
                                                <td> {{ $item->nama ?? '' }} </td>
                                                <td>{{ $item->resiko_jatuh ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- pagination --}}
                        <div class="flex justify-end w-full z-50 mt-5">
                            {{ $data->links() }}
                        </div>
                        {{-- end pagination --}}
                    </div>

                </div>
                <div class="bg-gradient-to-b from-sky-500 to-sky-300 shadow-xl min-h-full min-w-6 border rounded-e-lg">
                </div>
            </div>
        </div>
    </div>
@endsection
