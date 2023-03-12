@extends('layouts.app')

@section('title', 'Data Trainer')

@section('content')

<div class="container">
    <a href="/admin/trainers" class="btn btn-primary">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('trainers.update', $trainer->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @error('title')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$trainer->title}}">
                </div>
                @error('description')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$trainer->description}}</textarea>
                </div>
                @error('image')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <img src="/image/{{$trainer->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection