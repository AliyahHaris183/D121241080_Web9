@extends('layouts.app')

@section('judul', $buku->judul)

@section('konten')
    <div class="border-t border-b border-black/10 py-10">
        <h1 class="text-4xl font-bold">{{ $buku->judul }}</h1>
        <p class="mt-2 text-sm text-slate">{{ $buku->penulis }} · {{ $buku->tahun_terbit }}</p>

        <p class="mt-8 leading-relaxed">
            {{ $buku->sinopsis ?: 'Belum ada sinopsis.' }}
        </p>
    </div>

    <div class="mt-6 flex gap-4 text-xs">
        <a href="{{ route('buku.edit', $buku) }}" class="underline">Ubah</a>
        <a href="{{ route('buku.index') }}" class="underline">Kembali</a>
    </div>
@endsection
