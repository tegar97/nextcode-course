@extends('layouts.back')
@section('content')

<h4>Buat Kategori Kursus baru</h4>
<form action="{{route('category.store')}}" method="POST">
    @csrf
  <div class="form-group mb-5">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input type="text" class="form-control"  placeholder="nama kategori" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>

</form>


@stop
