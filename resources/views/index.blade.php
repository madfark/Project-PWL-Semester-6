@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Dashboard Warung</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <x-card title="Total Barang" value="120" />
    <x-card title="Penjualan Hari Ini" value="Rp 1.250.000" />
    <x-card title="Barang Habis" value="5" color="text-red-500" />
</div>
@endsection