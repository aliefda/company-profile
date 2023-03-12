@extends('layouts.app')

@section('title', 'Data Trainer')

@section('content')

<div class="container">
    <a href="/admin/trainers/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($trainers as $trainer)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$trainer->title}}</td>
                    <td>{{$trainer->description}}</td>
                    <td>
                        <img src="/image/{{$trainer->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('trainers.edit', $trainer->id)}}" class="btn btn-warning mb-1">Edit</a>
                        <form action="{{route('trainers.destroy', $trainer->id)}}" method="POST">
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