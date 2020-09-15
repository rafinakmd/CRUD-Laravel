@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
    <form action="{{ url('home', @$home->id) }}" method="post">
      @csrf

      @if(!empty($siswa))
        @method('PATCH')
      @endif
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">First and last name</span>
        </div>
           <input class="form-control" type="text" name="nama" value="{{ old('nama', @$home->nama) }}" /><br/><br/>
        </div></br>

      <div class="row">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Kelas</span>
        </div>
               <label><input type="radio" name="kelas" value="X" {{ old('kelas', @$test->kelas) =='X' ? 'checked' : '' }} >X</label></br>
               <label><input type="radio" name="kelas" value="XI" {{ old('kelas', @$test->kelas) =='XI' ? 'checked' : '' }}>XI</label></br>
               <label><input type="radio" name="kelas" value="XII" {{ old('kelas', @$test->kelas) =='XII' ? 'checked' : '' }}>XII</label><br/><br/>
        </div>
  </br>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Jurusan</span>
        </div>
            <input class="form-control" type="text" name="jurusan" value="{{ old('jurusan', @$home->jurusan) }}"><br/>
      </div></br>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Alamat</span>
        </div>
           <input class="form-control" type="text" name="alamat" value="{{ old('alamat', @$home->alamat) }}"><br/><br/><br/>
      </div></br>

      <div class="input-group">
        <div class="col-25">
          <span class="input-group-text" id="">Sekolah</span>
        </div>
           <input class="form-control" type="text" name="sekolah" value="{{ old('sekolah', @$home->sekolah) }}"><br/><br/><br/><br/>
      </div></br>

        <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Simpan">

    </form>
    </div>
  </div>
  </body>
</html>
@endsection
