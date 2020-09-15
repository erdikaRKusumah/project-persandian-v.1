@extends ('templates/master')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Isi Data Responden</h1>
<div class="container">
 <div class="row">
  <div class="col-6">
  <form action="/responden" method="POST">
  @csrf  

  
    <div class="form-group">
    <label for="identitas_instansi_perusahaan">Identitas Instansi atau Perusahaan :</label>
      <select id="inputState" class="form-control @error('identitas_instansi_perusahaan') is-invalid @enderror" name="identitas_instansi_perusahaan">
        <option selected>Satuan Kerja</option>
        <option>Direktorat</option>
        <option>Departemen</option>
      </select>
      @error('identitas_instansi_perusahaan')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    
  
    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="alamat">Alamat 1</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
      @error('alamat')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <!-- <div class="form-group col-md-5">
      <label for="alamat 2">Alamat 2</label>
      <input type="text" class="form-control" id="alamat2">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Kode Pos</label>
      <input type="text" class="form-control" id="inputZip">
    </div> -->
  </div>

  <div class="form-group">
    <label for="no_telpon">No Telpon</label>
    <input type="text" class="form-control" id="no_telpon" placeholder="(Kode Area) Nomor Telpon" name="no_telpon">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="user@departemen_responden.go.id" name="email">
  </div>

  <div class="form-group">
    <label for="pengisi_lembar_evaluasi">Pengisi Lembar Evaluasi</label>
    <input type="text" class="form-control" id="pengisi_lembar_evaluasi" placeholder="Nama Staf atau Pejabat" name="pengisi_lembar_evaluasi">
  </div>

  <div class="form-group">
    <label for="jabatan">Jabatan :</label>
    <input type="text" class="form-control" id="jabatan" placeholder="Jabatan Struktural/Fungsional" name="jabatan">
  </div>

  <div class="form-group">
    <label for="tgl_pengisian">Tanggal Pengisian :</label>
    <input type="date" class="form-control" id="tgl_pengisian" name="tgl_pengisian">
  </div>

  <div class="form-group">
    <label for="deskripsi">Deskripsi Ruang Lingkup :</label>
    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Isi dengan deskripsi ruang lingkup struktur organisasi (Departemen, Bagian atau Satuan Kerja) dan infrastruktur TIK
" name="deskripsi"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
  </div>
 </div>
</div>

@endsection