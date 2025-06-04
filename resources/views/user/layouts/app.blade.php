<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="icon" type="image/png" href="{{ asset('dist/assets/img/logo.png') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('dist/assets/scss/iziToast.min.css') }}">
    <script src="{{ asset('dist/assets/js/iziToast.min.js') }}"></script>
</head>

<body class="bg-[#F3F3F3] min-h-screen">
    <div class="h-full shadow-xl relative">

        {{-- Navbar --}}
        @include('user.layouts.navbar')

        {{-- Banner --}}
        <section class="relative overflow-hidden min-h-[650px] bg-gradient-to-b from-sky-800 to-sky-500 shadow">
            <img src="{{ asset('img/pattern.jpg') }}" alt=""
                class="absolute inset-0 w-full h-full lg:h-screen object-cover mix-blend-overlay">
        </section>



        <main class="container mx-auto pb-20 mt-[-500px]">
            <section class="mt-12">
                @yield('content')
            </section>
        </main>
    </div>

    {{-- @include('user.layouts.footer') --}}

    @include('user.layouts.jsfoot')
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
