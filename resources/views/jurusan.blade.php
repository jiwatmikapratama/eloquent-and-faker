@extends('layouts.main')
@section('container')
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Nama Jurusan</th>
                <th scope="col">Nama Fakultas</th>
                <th scope="col">Nama Dosen</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($jurusans as $jurusan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $jurusan['nama_jurusan'] }}</td>
                    <td>{{ $jurusan->fakultas['nama_fakultas'] }}</td>
                    <td>{{ $jurusan->dosen['nama_dosen'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
