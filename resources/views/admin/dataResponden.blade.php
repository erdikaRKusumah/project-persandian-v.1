
@extends ('templates/masterAdmin')




@section('container')




<h1 class="h3 mb-4 text-gray-800">Data Responden</h1>
<div class="container">

  <form class="form-inline my-2 my-lg-0" method="GET" action="/dataResponden">
      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>


<table class="table table-striped">
  <thead>
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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal">
          Ubah
        </button>
        <form action="{{$res->id_responden}}" method="post" class="d-inline">
        @method('delete')
        @csrf 
        <button type="button" class="badge badge-danger">Hapus</button>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Responden</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

           <form class="need-validation" action="{{ action('RespondenController@store') }}" method="POST">
            {{ csrf_field() }}
              <div class="modal-body">
                    <div class="form-group">
                      <label>ID Responden :</label>
                      <input type="id_responden" class="form-control" placeholder="ID Responden">
                    </div>

                    <div class="form-group">
                      <label>Identitas Perusahaan :</label>
                      <input type="identitas_instansi_perusahaan" class="form-control" placeholder="Identitas Perusahaan">
                    </div>

                    <div class="form-group">
                      <label>Alamat :</label>
                      <textarea class="form-control" type="alamat" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label>No Telp. :</label>
                      <input type="no_telpon" class="form-control" placeholder="Nomor Telepon..">
                    </div>

                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control"placeholder="Email..">
                    </div>

                    <div class="form-group">
                      <label>Lembar Pengisi Evaluasi</label>
                      <input type="pengisi_lembar_evaluasi" class="form-control"placeholder="Nama...">
                    </div>

                    <div class="form-group">
                      <label>Jabatan</label>
                      <input type="jabatan" class="form-control"placeholder="Jabatan..">
                    </div> 

                    <div class="form-group">
                      <label>Tanggal Pengisian :</label>
                      <input class="form-control" type="tgl_pengisian" placeholder="" disabled>
                    </div>

                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea class="form-control" type="deskripsi" rows="3"></textarea>
                    </div>
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>

            </div>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


<!--  -->


@endsection