
@extends ('templates/masterAdmin')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Data Responden</h1>
<div class="container">
<div class="mb-3">
  <form class="form-inline my-2 my-lg-0" method="GET" action="/dataResponden">
      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>

</div>

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
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($respondens as $res)
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
      <td>
        <a href="/responden/4" class="badge badge-info">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection