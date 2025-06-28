@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white rounded-xl shadow-md ring-1 ring-gray-200 p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Detail Mahasiswa</h1>

        <dl class="space-y-4">
            <div>
                <dt class="font-medium text-gray-600">Nama:</dt>
                <dd class="text-lg text-gray-900">{{ $mahasiswa->nama }}</dd>
            </div>
            <div>
                <dt class="font-medium text-gray-600">NIM:</dt>
                <dd class="text-lg text-gray-900">{{ $mahasiswa->nim }}</dd>
            </div>
            <div>
                <dt class="font-medium text-gray-600">Jurusan:</dt>
                <dd class="text-lg text-gray-900">{{ $mahasiswa->jurusan }}</dd>
            </div>
            <div>
                <dt class="font-medium text-gray-600">Email:</dt>
                <dd class="text-lg text-gray-900">{{ $mahasiswa->email }}</dd>
            </div>
        </dl>

        <div class="mt-6">
            <a href="{{ route('mahasiswa.index') }}" class="inline-block text-blue-500 hover:underline">← Kembali ke daftar</a>
        </div>
    </div>
@endsection
