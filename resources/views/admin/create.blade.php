@extends ('templates/masterAdmin')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Tambah Pertanyaan</h1>
<div class="container">
 <div class="row">
  <div class="col-6">
  <form action="/pertanyaan" method="POST">
  @csrf  

  
    <div class="form-group">
    <label for="id_kategori">Identitas Instansi atau Perusahaan :</label>
      <select id="inputState" class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" >
      @foreach($kategori as $kat)
        <option selected>{{ $kat->id_kategori}}</option>
        @endforeach
      </select>
    
  </div>
    
    <div class="form-group">
      <label for="pertanyaan">Pertanyaan</label>
      <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" name="pertanyaan">
      @error('pertanyaan')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  

  <div class="form-group">
  
    <label for="pilihan">Pilihan</label>
    <input type="text" class="form-control @error('pilihan') is-invalid @enderror" name="pilihan[]" placeholder="1">
      @error('pilihan')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      <input type="text" class="form-control "  name="pilihan[]" placeholder="2">
      <input type="text" class="form-control "  name="pilihan[]" placeholder="3">
      <input type="text" class="form-control "  name="pilihan[]" placeholder="4">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
  </div>
 </div>
</div>

    


@endsection