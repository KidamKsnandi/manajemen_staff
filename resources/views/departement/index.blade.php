@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-3">
        <h1 style="font-size: 30px">Departement</h1>
        <hr>
        <br>
        <div class="mb-3">
            <a href="{{ route('departement.create') }}"
                class="border px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Create Data</a>
        </div>
        <div class="">
            <table class="w-full">
                <thead class="bg-gray-300">
                    <tr class="border">
                        <th class="border">No</th>
                        <th class="border">Nama</th>
                        <th class="border">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departements as $index => $departement)
                        <tr class="border text-center">
                            <td class="border">{{ $index + 1 }}</td>
                            <td class="border">{{ $departement->name }}</td>
                            <td class="border">
                                <form action="{{ route('departement.destroy', $departement->id) }}" method="post"
                                    onsubmit="return confirmDelete(event)">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('departement.edit', $departement->id) }}"
                                        class="border px-2 py-1 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md">Edit</a>
                                    <button type="submit"
                                        class="border px-2 py-1 bg-red-500 hover:bg-red-700 text-white rounded-md">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('js')
        <script>
            function confirmDelete(event) {
                event.preventDefault();
                const form = event.target;
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Data ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            }

            @if (session('success'))
                Swal.fire({
                    title: 'Sukses!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif
        </script>
    @endpush
@endsection
