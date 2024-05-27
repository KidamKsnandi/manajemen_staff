@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10 lg:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl lg:rounded-lg">
            <div class="p-6 lg:px-20 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Tambah Departement</h2>

                <form action="{{ route('departement.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nama Departement</label>
                        <input type="text" name="name" id="name" value="{{ old('name' ?? '') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-lg focus:border-indigo-500 focus:ring-indigo-500 lg:text-lg">
                        @error('name')
                            <span class="text-red-500 text-lg">{{ $message }}</span>
                        @enderror
                    </div>


                    <div>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Tambah
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
