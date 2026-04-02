<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WarungKu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5efe6] text-[#4b3f35] flex flex-col min-h-screen">

    {{-- HEADER --}}
    <header class="bg-[#e8dccb] border-b border-[#d6c5b4] px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-[#b08968] flex items-center justify-center font-bold text-white">W</div>
            <h1 class="text-lg font-semibold">WarungKu</h1>
        </div>
        <div class="flex items-center gap-3">
            <input type="text" placeholder="Cari barang..."
                class="px-3 py-1.5 rounded-md bg-[#f5efe6] border border-[#d6c5b4] text-sm outline-none">
            <button class="bg-[#b08968] hover:bg-[#9c7458] px-4 py-1.5 rounded-md text-sm text-white">Logout</button>
        </div>
    </header>

    {{-- CONTENT --}}
    <div class="flex flex-1">
        
        {{-- SIDEBAR --}}
        @include('components.sidebar')

        {{-- MAIN --}}
        <main class="flex-1 px-8 py-6">
            @yield('content')
        </main>

    </div>

    {{-- FOOTER --}}
    <footer class="bg-[#e8dccb] border-t border-[#d6c5b4] text-center py-3 text-xs">
        © 2026 WarungKu
    </footer>

</body>
</html>