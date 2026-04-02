<!DOCTYPE html>
<html lang="id">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WarungKu</title>
</head>
<body class="bg-[#f5efe6] text-[#4b3f35]">
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
    <div class="flex">
        <aside class="w-64 bg-[#e8dccb] border-r border-[#d6c5b4] min-h-screen px-5 py-6">
            <p class="text-xs mb-4">Menu</p>
            <nav class="space-y-2 text-sm">
                <a href="index.html" class="block px-3 py-2 rounded-md bg-[#d6c5b4]">Dashboard</a>
                <a href="stokbarang.html" class="block px-3 py-2 rounded-md hover:bg-[#d6c5b4]">Stok Barang</a>
                <a href="transaksi.html" class="block px-3 py-2 rounded-md hover:bg-[#d6c5b4]">Transaksi</a>
                <a href="laporan.html" class="block px-3 py-2 rounded-md hover:bg-[#d6c5b4]">Laporan</a>
            </nav>
        </aside>
        <main class="flex-1 px-8 py-6">
            <h2 class="text-2xl font-semibold mb-6">Dashboard Warung</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="bg-[#fffaf3] border border-[#e0d3c2] p-5 rounded-lg shadow-sm">
                    <p class="text-sm">Total Barang</p>
                    <p class="text-2xl font-semibold">120</p>
                </div>
                <div class="bg-[#fffaf3] border border-[#e0d3c2] p-5 rounded-lg shadow-sm">
                    <p class="text-sm">Penjualan Hari Ini</p>
                    <p class="text-2xl font-semibold">Rp 1.250.000</p>
                </div>
                <div class="bg-[#fffaf3] border border-[#e0d3c2] p-5 rounded-lg shadow-sm">
                    <p class="text-sm">Barang Habis</p>
                    <p class="text-2xl font-semibold text-red-500">5</p>
                </div>
            </div>
            <div class="mt-8 bg-[#fffaf3] border border-[#e0d3c2] rounded-lg p-6">
                <h3 class="text-lg mb-4">Stok Barang</h3>
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-[#e0d3c2]">
                            <th class="text-left py-2">Nama</th>
                            <th class="text-left py-2">Kategori</th>
                            <th class="text-left py-2">Stok</th>
                            <th class="text-left py-2">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#e0d3c2] hover:bg-[#f3e9dd]">
                            <td class="py-2">Indomie</td>
                            <td>Makanan</td>
                            <td>50</td>
                            <td>Rp 3.000</td>
                        </tr>
                        <tr class="border-b border-[#e0d3c2] hover:bg-[#f3e9dd]">
                            <td class="py-2">Aqua Botol</td>
                            <td>Minuman</td>
                            <td>30</td>
                            <td>Rp 5.000</td>
                        </tr>
                        <tr class="border-b border-[#e0d3c2] hover:bg-[#f3e9dd]">
                            <td class="py-2">Telur</td>
                            <td>Sembako</td>
                            <td>10</td>
                            <td>Rp 2.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-8 bg-[#fffaf3] border border-[#e0d3c2] rounded-lg p-6">
                <h3 class="text-lg mb-4">Transaksi Terakhir</h3>
                <ul class="text-sm space-y-2">
                    <li class="flex justify-between border-b border-[#e0d3c2] pb-2">
                        <span>Indomie x2</span>
                        <span>Rp 6.000</span>
                    </li>
                    <li class="flex justify-between border-b border-[#e0d3c2] pb-2">
                        <span>Aqua x1</span>
                        <span>Rp 5.000</span>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    <footer class="bg-[#e8dccb] border-t border-[#d6c5b4] text-center py-3 text-xs">
        © 2026 WarungKu
    </footer>
</body>
</html>