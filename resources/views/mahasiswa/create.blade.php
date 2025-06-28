@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white rounded-xl shadow-md ring-1 ring-gray-200 p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Mahasiswa</h1>

        @if ($errors->any())
            <div class="mb-4 text-red-600 bg-red-100 p-4 rounded">
                <ul class="list-disc ml-6 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">NIM</label>
                <input type="text" name="nim" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Jurusan</label>
                <input type="text" name="jurusan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-400 focus:border-blue-400" required>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-5 py-2 rounded-md hover:bg-blue-600 transition">
                    Simpan
                </button>
                <a href="{{ route('mahasiswa.index') }}" class="text-gray-600 hover:underline">← Kembali</a>
            </div>
        </form>
    </div>
@endsection
