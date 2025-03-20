<div class="fixed left-0 right-0 z-50 pt-12 px-12 flex justify-between">
    <div class="flex items-center gap-3 z-50">
        <img src="{{ asset('img/mjamil.webp') }}" alt="" class="h-12">
        <img src="{{ asset('img/kemenkes.jpg') }}" alt="" class="h-12">
        <div class="text-white font-bold">
            <p>Kelompok B Manajemen Keperawatan</p>
            <p>Program Studi Profesi Ners Tahun 2025</p>
        </div>
    </div>
    @auth
        <div class="relative hidden sm:flex">
            <button id="dropdownButton" class="bg-sky-500 text-white font-bold px-4 py-2 rounded-lg hover:bg-sky-600 transition duration-200 flex items-center gap-2">
                <i class="fas fa-user"></i>
                {{ Auth::user()->name }}
                <i class="fas fa-chevron-down"></i>
            </button>

            <div id="dropdownMenu" class="absolute right-0 mt-9 w-48 bg-white rounded-lg shadow-lg hidden">
                <a href="{{ route('penilaian.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 transition duration-150 rounded-lg">
                    <i class="fas fa-tachometer-alt"></i> Input Data
                </a>
                {{-- <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 transition duration-150 rounded-lg">
                    <i class="fas fa-user-circle"></i> Profile
                </a> --}}
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 transition duration-150 rounded-lg" onclick="openModal('logout')">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    @else
        {{-- Jika user belum login, tampilkan tombol login --}}
        <a href="{{ route('login') }}" class="hidden sm:flex">
            <button class="bg-sky-500 text-white font-bold px-4 py-2 rounded-lg hover:bg-sky-600 transition duration-200 flex items-center gap-2">
                <i class="fas fa-sign-in-alt"></i>
                Login
            </button>
        </a>
    @endauth
</div>

<div id="logout" class="modal">
    <div class="modal-box bg-white text-slate-800">
        <h3 class="text-lg font-bold">Logout?</h3>
        <img src="{{ asset('dist/assets/img/around-the-world.gif') }}" alt="" class="w-36 mx-auto">
        <p class="text-center">Yakin ingin logout?</p>
        <div class="modal-action">
            <a href="{{ route('logout') }}" class="bg-sky-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-sky-600 transition-all duration-300"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dropdown Desktop
        const dropdownButton = document.getElementById("dropdownButton");
        const dropdownMenu = document.getElementById("dropdownMenu");

        if (dropdownButton && dropdownMenu) {
            dropdownButton.addEventListener("click", function () {
                dropdownMenu.classList.toggle("hidden");
            });
        }

        // Dropdown Mobile
        const dropdownButtonMobile = document.getElementById("dropdownButtonMobile");
        const dropdownMenuMobile = document.getElementById("dropdownMenuMobile");

        if (dropdownButtonMobile && dropdownMenuMobile) {
            dropdownButtonMobile.addEventListener("click", function () {
                dropdownMenuMobile.classList.toggle("hidden");
            });
        }

        // Click outside to close both dropdowns
        document.addEventListener("click", function (event) {
            if (dropdownButton && dropdownMenu && !dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
            if (dropdownButtonMobile && dropdownMenuMobile && !dropdownButtonMobile.contains(event.target) && !dropdownMenuMobile.contains(event.target)) {
                dropdownMenuMobile.classList.add("hidden");
            }
        });
    });
</script>

{{-- js modal --}}
<script>
    function openModal(id) {
        document.getElementById(id).classList.add("modal-open");
    }

    function closeAndOpenModal() {
        document.getElementById("logout").classList.remove("modal-open"); // Tutup modal pertama
        setTimeout(() => {
            document.getElementById("my_modal_2").classList.add("modal-open"); // Buka modal kedua
        }, 300); // Delay biar smooth
    }
</script>

