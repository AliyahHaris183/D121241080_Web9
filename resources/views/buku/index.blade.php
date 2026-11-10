@extends('layouts.app')

@section('judul', 'Daftar Buku')

@section('konten')
    {{-- Judul besar --}}
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
        <h1 class="text-5xl md:text-6xl leading-none tracking-tight">Daftar<br>Buku</h1>
        <div class="max-w-xs text-sm text-slate">
            Koleksi buku perpustakaan mini. Cari, tambah, ubah, atau hapus data buku di sini.
        </div>
    </div>

    {{-- Pencarian --}}
    <form action="{{ route('buku.index') }}" method="GET" class="mb-10 flex gap-2 max-w-md">
        <input type="text" name="cari" value="{{ $cari }}" placeholder="Cari judul atau penulis..."
               class="flex-1 bg-white border border-black/10 px-3 py-2 text-sm focus:outline-none focus:border-tinta">
        <button class="bg-midnight text-white px-4 py-2 text-sm">Cari</button>
    </form>

    {{-- Grid kartu buku --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
        @php
            $warna = ['bg-midnight', 'bg-slate', 'bg-charcoal', 'bg-silver'];
        @endphp

        @forelse ($daftarBuku as $i => $buku)
            <div class="flex flex-col">
                <div class="aspect-[4/5] {{ $warna[$i % 4] }} flex items-end p-4 text-white text-xs">
                    {{ $buku->tahun_terbit }}
                </div>

                <a href="{{ route('buku.show', $buku) }}" class="mt-4 text-base hover:underline">
                    {{ $buku->judul }}
                </a>
                <p class="mt-1 text-xs text-slate">{{ $buku->penulis }}</p>

                <div class="mt-3 flex gap-4 text-xs">
                    <a href="{{ route('buku.edit', $buku) }}" class="underline">Ubah</a>
                    <form action="{{ route('buku.destroy', $buku) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus buku ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="underline text-red-700">Hapus</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="col-span-full py-10 text-center text-slate text-sm">Belum ada buku.</p>
        @endforelse
    </div>

    <div class="mt-12 text-center text-sm">
        {{ $daftarBuku->links() }}
    </div>
@endsection
