@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Daftar Mahasiswa</h1>
            <a href="{{ route('mahasiswa.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">
                + Tambah Mahasiswa
            </a>
        </div>

        {{-- Flash message --}}
        @if (session('success'))
            <div class="mb-4 p-4 text-sm bg-green-100 text-green-700 rounded shadow">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-xl shadow ring-1 ring-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr class="text-left text-sm font-semibold text-gray-700">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">NIM</th>
                        <th class="px-6 py-3">Jurusan</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                    @forelse ($mahasiswas as $mhs)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $mhs->id }}</td>
                            <td class="px-6 py-4">{{ $mhs->nama }}</td>
                            <td class="px-6 py-4">{{ $mhs->nim }}</td>
                            <td class="px-6 py-4">{{ $mhs->jurusan }}</td>
                            <td class="px-6 py-4">{{ $mhs->email }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('mahasiswa.show', $mhs->id) }}"
                                   class="text-indigo-600 hover:underline text-sm font-medium">Detail</a>

                                <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                   class="text-yellow-600 hover:underline text-sm font-medium">Edit</a>

                                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Yakin ingin hapus?')"
                                            class="text-red-600 hover:underline text-sm font-medium">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-6 text-gray-500">Belum ada data mahasiswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
