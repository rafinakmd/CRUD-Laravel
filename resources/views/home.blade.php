@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                    @endif

                    <a href="{{ url('/home/create') }}" class="btn btn-secondary">Tambah Data</a>
                    
                    <table border="1" class="table table-striped table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Intitusi</th>
                        <th>Aksi</th>
                      </tr>
                    @foreach ($home as $row)
                    <tr>
                        <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->kelas }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->sekolah }}</td>
                        <td>
                            <a href="{{ url('/home/' . $row->id . '/edit')}}" class="btn btn-secondary">Edit</a>
                            or
                            <a href="{{ url('/home/' . $row->id . '/destroy')}}" class="btn btn-light">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
