
@extends ('templates/masterAdmin')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Kelola Pertanyaan</h1>
<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Pertanyaan</th>
      <th scope="col">ID Kategori</th>
      <th scope="col">Pertanyaaan</th>
      <th scope="col">Pilihan</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pertanyaan as $per)
    <tr>
      <th scope="row"> {{ $loop->iteration}} </th>
      <td> {{ $per->id_pertanyaan }} </td>
      <td> {{ $per->id_kategori }} </td>
      <td> {{ $per->pertanyaan}} </td>
      <td> {{ $per->pilihan}} </td>
      <td>
        <a href="" class="badge badge-success">Ubah</a>
        <a href="" class="badge badge-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection