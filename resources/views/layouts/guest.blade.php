<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ebook') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('dist/assets/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/scss/iziToast.min.css') }}">
    <script src="{{ asset('dist/assets/js/iziToast.min.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div
        class="min-h-screen pt-6 sm:pt-0 bg-gradient-to-r from-sky-600 to-sky-400">

        <div class="flex flex-col justify-between min-h-screen gap-5 border">
            <div class="flex items-start justify-start gap-3 pt-12 px-12">
                <img src="{{ asset('img/kemenkes.jpg') }}" alt="" class="h-12">
                <div class="text-white font-bold">
                    <p>Kelompok B Manajemen Keperawatan</p>
                    <p>Program Studi Profesi Ners Tahun 2025</p>
                </div>
            </div>

            <div class="flex flex-col sm:justify-center items-center">
                <div>
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />

                        {{-- <h1 class="text-3xl font-bold text-sky-500">Welcome Back</h1> --}}
                    </a>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>

            <div class="flex justify-between px-12 pb-8">
                <div class="flex items-center gap-2 text-white font-bold text-sm">
                    <span>EFITRA, SKP. M.KEP</span>
                    <span>|</span>
                    <span>NS. INDRI RAHMADINI. M.KEP</span>
                    <span>|</span>
                    <span>NS. LIDYA. M.KEP, SP. KMB</span>
                </div>

                <div class="flex items-center gap-2 text-white font-bold text-sm">
                    <span>ANILA</span>
                    <span>|</span>
                    <span>ARIVA</span>
                    <span>|</span>
                    <span>DITA</span>
                    <span>|</span>
                    <span>GAYATRI</span>
                    <span>|</span>
                    <span>MAYANG</span>
                    <span>|</span>
                    <span>MELATI</span>
                    <span>|</span>
                    <span>RISMA</span>
                    <span>|</span>
                    <span>SIVA</span>
                    <span>|</span>
                    <span>YOLA</span>
                </div>
            </div>
        </div>
    </div>
</body>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach

@endif
@if (session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('success') }}',
        });
    </script>
@endif

@if (session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
        });
    </script>
@endif

</html>
