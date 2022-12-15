@extends('layouts.app')

@section('title', 'Data Portfolio')

@section('content')

<div class="container">
    <a href="/admin/portfolios" class="btn text-white text-bold mb-1" style="background-color: #2EB104">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Pemrakarsa</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Pemrakarsa"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn text-white text-bold btn-block" style="background-color: #2EB104">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
