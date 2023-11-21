<!-- resources/views/event/all.blade.php -->

@extends('layouts.main')

@section('content')
    <h1>Daftar</h1>
    <table class="table table-dark table-striped" style="width: 40%;">
        <thead>
            <tr>
                <th>No_Peserta</th>
                <th>Nama_Event</th>
                <th>Nama_Peserta</th>
                <th>Email</th>
                <th>Tanggal_Pendaftaran</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarr as $daftar)
                <tr>
                    <td>{{ $daftar->no_peserta }}</td>
                    <td>{{ $daftar->nama_event }}</td>
                    <td>{{ $daftar->nama_peserta }}</td>
                    <td>{{ $daftar->email }}</td>
                    <td>{{ $daftar->tanggal_pendaftaran }}</td>
                    <td>
                        
                        <a href="/daftar/detail/{{ $daftar->id }}" class="btn btn-primary">Detail</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
