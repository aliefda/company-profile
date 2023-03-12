@extends('layouts.app')

@section('title', 'Data Vehicle')

@section('content')

<div class="container">
    <a href="/admin/vehicles/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table table-bordered table-hover table-stiped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$vehicle->title}}</td>
                    <td>{{$vehicle->description}}</td>
                    <td>{{$vehicle->amount}}</td>
                    <td>
                        <img src="/image/{{$vehicle->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('vehicles.edit', $vehicle->id)}}" class="btn btn-warning mb-1">Edit</a>
                        <form action="{{route('vehicles.destroy', $vehicle->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection