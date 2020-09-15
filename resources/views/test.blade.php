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

<a href="{{ url('/test/create') }}">Tambah Data</a>
<table border="1">
<tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Intitusi</th>
    <th>Aksi</th>
  </tr>
@foreach ($test as $row)
<tr>
    <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
    <td>{{ $row->nama }}</td>
    <td>{{ $row->kelas }}</td>
    <td>{{ $row->jurusan }}</td>
    <td>{{ $row->alamat }}</td>
    <td>{{ $row->sekolah }}</td>
    <td>
        <a href="{{ url('/test/' . $row->nama . '/edit')}}">Edit</a>
        or
        <form action="{{ url('/test', $row->nama)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit">Delete</button>
    </td>
  </tr>
@endforeach
</table>
