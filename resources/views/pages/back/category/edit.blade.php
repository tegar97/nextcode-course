@extends('layouts.back')
@section('content')

<h4>Edit Kategori </h4>
<form action="{{route('category.update',$category)}}" method="POST">
    @method('PUT')
    @csrf

  <div class="form-group mb-5">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input type="text" class="form-control" value="{{$category->name}}"   placeholder="nama kategori" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>

</form>


@stop
