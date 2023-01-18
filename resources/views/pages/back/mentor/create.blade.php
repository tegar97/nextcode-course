@extends('layouts.back')
@section('content')

<h4>Buat mentor  baru</h4>
<form action="{{route('mentor.store')}}" method="POST"  enctype="multipart/form-data" >
    @csrf
  <div class="form-group mb-3">
    <label >Nama mentor</label>
    <input type="text" class="form-control"  placeholder="nama mentor" name="name">
  </div>
  <div class="form-group mb-3">
    <label >Profession</label>
    <input type="text" class="form-control"  placeholder="Pekerjaan Mentors" name="profession">
  </div>
  <div class="form-group mb-3">
    <label >Email</label>
    <input type="email" class="form-control"  placeholder="Email" name="email">
  </div>
  <div class="form-group mb-3">
    <label >Photo</label>
    <input type="file" class="form-control" name="profile" >
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>

</form>


@stop
