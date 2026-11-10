@extends('layouts.app')

@section('judul', 'Ubah Buku')

@section('konten')
    <div class="border-t border-b border-silver py-10">
        <h1 class="text-4xl text-midnight mb-8">Ubah Buku</h1>

        <form action="{{ route('buku.update', $buku) }}" method="POST" class="space-y-6 max-w-xl">
            @csrf
            @method('PUT')
            @include('buku._form')

            <div class="flex items-center gap-6 pt-4">
                <button class="bg-midnight text-white px-6 py-2 text-sm hover:opacity-90">Simpan Perubahan</button>
                <a href="{{ route('buku.index') }}" class="text-sm text-slate underline">Batal</a>
            </div>
        </form>
    </div>
@endsection
