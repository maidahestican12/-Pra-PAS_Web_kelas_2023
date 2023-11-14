<!-- resources/views/event/all.blade.php -->

@extends('layouts.main')

@section('content')
    <h1>Event</h1>
    <table class="table table-dark table-striped" style="width: 40%;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Jumlah Peserta</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->nama }}</td>
                    <td>{{ $event->lokasi }}</td>
                    <td>{{ $event->tanggal }}</td>
                    <td>{{ $event->jumlah_peserta }}</td>
                    <td>
                        
                        <a href="/event/detail/{{ $event->id }}" class="btn btn-primary">Detail</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
