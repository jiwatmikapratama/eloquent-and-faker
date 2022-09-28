@extends('layouts.main')
@section('container')
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($dosens as $dosen)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $dosen['nama_dosen'] }}</td>
                    <td>{{ $dosen['umur'] }}</td>
                    <td>{{ $dosen['alamat'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
