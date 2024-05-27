@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10 lg:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl lg:rounded-lg">
            <div class="p-6 lg:px-20 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Edit Staff</h2>

                <form action="{{ route('staff.update', $staff->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nama Staff</label>
                        <input type="text" name="name" id="name"
                            value="{{ old('name', $staff->name ?? '') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-lg focus:border-indigo-500 focus:ring-indigo-500 lg:text-lg">
                        @error('name')
                            <span class="text-red-500 text-lg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ $staff->email }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-lg focus:border-indigo-500 focus:ring-indigo-500 lg:text-lg">
                        @error('email')
                            <span class="text-red-500 text-lg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="departement" class="block text-lg font-medium text-gray-700">Nama Staff</label>
                        <select name="departement" id="" class="mt-1 block w-full border border-gray-300 rounded-md shadow-lg focus:border-indigo-500 focus:ring-indigo-500 lg:text-lg">
                            <option value="">-- Pilih Departement --</option>
                            @foreach ($departement as $item)
                                <option value="{{ $item->name }}" {{$item->name == $staff->departement ? 'selected' : ''}}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('departement')
                            <span class="text-red-500 text-lg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="hired_date" class="block text-lg font-medium text-gray-700">Tanggal Dipekerjakan</label>
                        <input type="date" name="hired_date" id="hired_date" value="{{ $staff->hired_date }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-lg focus:border-indigo-500 focus:ring-indigo-500 lg:text-lg">
                        @error('hired_date')
                            <span class="text-red-500 text-lg">{{ $message }}</span>
                        @enderror
                    </div>



                    <div>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Ubah
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
