@extends('layouts.app')

@section('title', 'Data Vehicle')

@section('content')

<div class="container">
    <a href="/admin/vehicles" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('vehicles.update', $vehicle->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @error('title')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$vehicle->title}}">
                </div>
                @error('description')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$vehicle->description}}</textarea>
                </div>
                @error('amount')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="text" class="form-control" name="amount" placeholder="Jumlah" value="{{$vehicle->amount}}" >
                </div>
                @error('image')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <img src="/image/{{$vehicle->image}}" alt="" class="img-fluid">
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