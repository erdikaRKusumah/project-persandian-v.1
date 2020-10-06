@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Responden</div>

                <div class="card-body">
                    {{-- @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif --}}
                    <form action="/simpan_data_responden" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="identitas_instansi_perusahaan">Identitas Instansi:</label>
                            <select id="identitas_instansi_perusahaan" onchange="myFunction(this.value)" class="form-control @error('identitas_instansi_perusahaan') is-invalid @enderror" name="identitas_instansi_perusahaan">
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
                            <input type="text" class="form-control" id="no_telpon" placeholder="(Kode Area) Nomor Telpon" name="no_telpon" disabled>
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
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript"> 
    function myFunction(val) {
        var text;
        if (val === 'Direktorat') {
            $('#no_telpon').val('0821234567');      
        } else if(val === 'Satuan Kerja'){
            $('#no_telpon').val('12345678');
        }else{
            $('#no_telpon').val('987654321');
        }
        
}
    

</script>
@endsection
<!-- var identitas_instansi_perusahaan = $("#identitas_instansi_perusahaan").val();
        $.ajax({
            
            url: 'get-no',
            data: 'identitas_instansi_perusahaan='+identitas_instansi_perusahaan,
        }).success: function (data) {
                $('#no_telpon').val(no_telpon);
            }
        ; -->