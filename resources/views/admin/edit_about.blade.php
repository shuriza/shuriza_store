@extends('layout')

@section('title', 'Edit Halaman About')

@section('content')
<div class="max-w-4xl mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Edit Halaman About</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-900 p-4 rounded mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Penjelasan Produk</label>
            <textarea name="about_produk_text" rows="6" class="form-control">{{ old('about_produk_text', $user->about_produk_text) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar Produk</label>
            @if($user->about_produk_image)
                <img src="{{ asset('assets/img/' . $user->about_produk_image) }}" class="mb-2 w-32 rounded shadow">
            @endif
            <input type="file" name="about_produk_image" class="form-control">
        </div>

        <hr class="my-4">

        <div class="mb-4">
            <label class="block font-semibold mb-1">Penjelasan Petani</label>
            <textarea name="about_petani_text" rows="6" class="form-control">{{ old('about_petani_text', $user->about_petani_text) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Foto Petani</label>
            @if($user->about_petani_image)
                <img src="{{ asset('assets/img/' . $user->about_petani_image) }}" class="mb-2 w-32 rounded shadow">
            @endif
            <input type="file" name="about_petani_image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>

</div>
@endsection
