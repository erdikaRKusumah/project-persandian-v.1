
@extends ('templates/masterAdmin')




@section('container')


<h1 class="h3 mb-4 text-gray-800">Kelola Pertanyaan</h1>
<div class="container">

<form class="form-inline my-2 my-lg-0" method="GET" action="/kelolaPertanyaan">
      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
  <a class="btn btn-primary" href="/tambahPertanyaan" role="button">Tambah Pertanyaan</a>


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
        <button type="button" class="badge badge-success" data-toggle="modal" data-target="#exampleModal">
          Ubah
        </button>
        <form action="{{$per->id_pertanyaan}}" method="post" class="d-inline">
        @method('delete')
        @csrf 
        <button type="button" class="badge badge-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Pertanyaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-5 col-form-label">Id Pertanyaan</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Id Kategori</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-5 col-form-label">Pilihan</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Pertanyaan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection