<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul', 'Perpustakaan Mini')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-midnight">

    <header class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between text-sm">
        <a href="{{ route('buku.index') }}" class="text-lg">Perpustakaan Mini</a>
        <nav class="flex gap-6 text-slate">
            <a href="{{ route('buku.index') }}" class="hover:text-midnight">Daftar Buku</a>
            <a href="{{ route('buku.create') }}" class="hover:text-midnight">Tambah Buku</a>
        </nav>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-10">
        @if (session('sukses'))
            <div id="pesan-sukses" class="mb-8 bg-midnight text-white px-4 py-2 text-sm transition-opacity duration-700">
                {{ session('sukses') }}
            </div>
        @endif

        @yield('konten')
    </main>

</body>
</html>
