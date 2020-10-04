@extends('admin.templates.default')
@section('content')
<div class="box">
    <div class="box-heder">
        <h3>Tambah Data penulis</h3>
    </div>
    <div class="box-body">
        <form action="{{route('admin.author.store')}}" method="POST">
            @csrf
            <div class="form-group @error('name') has-error @enderror">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Penulis" value="{{old('name')}}">
                @error('name')
            <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah Data" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection