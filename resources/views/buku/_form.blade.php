{{-- Bagian form yang dipakai bersama oleh create dan edit --}}
<div class="space-y-6">
    <div>
        <label for="judul" class="block text-sm text-slate mb-2">Judul</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul', $buku->judul ?? '') }}"
               class="w-full bg-white border px-3 py-2 text-midnight focus:outline-none focus:border-midnight @error('judul') border-red-500 @else border-silver @enderror">
        @error('judul')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="penulis" class="block text-sm text-slate mb-2">Penulis</label>
        <input type="text" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis ?? '') }}"
               class="w-full bg-white border px-3 py-2 text-midnight focus:outline-none focus:border-midnight @error('penulis') border-red-500 @else border-silver @enderror">
        @error('penulis')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="tahun_terbit" class="block text-sm text-slate mb-2">Tahun Terbit</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit"
               value="{{ old('tahun_terbit', $buku->tahun_terbit ?? '') }}"
               class="w-40 bg-white border px-3 py-2 text-midnight focus:outline-none focus:border-midnight @error('tahun_terbit') border-red-500 @else border-silver @enderror">
        @error('tahun_terbit')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="sinopsis" class="block text-sm text-slate mb-2">Sinopsis <span class="normal-case tracking-normal">(opsional)</span></label>
        <textarea id="sinopsis" name="sinopsis" rows="5"
                  class="w-full bg-white border border-silver px-3 py-2 text-midnight focus:outline-none focus:border-midnight">{{ old('sinopsis', $buku->sinopsis ?? '') }}</textarea>
    </div>
</div>
