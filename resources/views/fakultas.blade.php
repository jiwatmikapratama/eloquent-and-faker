@extends('layouts.main')
@section('container')
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Nama Fakultas</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($fakultass as $fakultas)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $fakultas['nama_fakultas'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
