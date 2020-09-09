
@extends ('templates/masterAdmin')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Halaman Admin</h1>
<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Responden</th>
      <th scope="col">Identeitas Perusahaan</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telp.</th>
      <th scope="col">Email</th>
      <th scope="col">Pengisi Lembar Evaluasi</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Tanggal Pengisian</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($responden as $res)
    <tr>
      <th scope="row"> {{ $loop->iteration}} </th>
      <td> {{ $res->id_responden }} </td>
      <td> {{ $res->identitas_instansi_perusahaan }} </td>
      <td> {{ $res->alamat }} </td>
      <td> {{ $res->no_telpon }} </td>
      <td> {{ $res->email }} </td>
      <td> {{ $res->pengisi_lembar_evaluasi }} </td>
      <td> {{ $res->jabatan }} </td>
      <td> {{ $res->tgl_pengisian }} </td>
      <td> {{ $res->deskripsi }} </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection