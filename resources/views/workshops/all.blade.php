<!-- resources/views/event/all.blade.php -->

@extends('layouts.main')

@section('content')
    <h1>Workshops</h1>
    <table class="table table-dark table-striped" style="width: 40%;">
        <thead>
            <tr>
                <th>Nama_Workshops</th>
                <th>Tanggal</th>
                <th>Topik_workshops</th>
                <th>Fasilitator</th>
                <th>Lokasi</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($workshopss as $workshops)
                <tr>
                    <td>{{ $workshops->nama_workshops }}</td>
                    <td>{{ $workshops->tanggal }}</td>
                    <td>{{ $workshops->topik_workshops }}</td>
                    <td>{{ $workshops->fasilitator }}</td>
                    <td>{{ $workshops->lokasi }}</td>
    
                    <td>
                        
                        <a href="/workshops/detail/{{ $workshops->id }}" class="btn btn-primary">Detail</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
