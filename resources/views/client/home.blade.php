@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <?php if(Session::has('register_success')): ?>
                        <div class="message message-success">
                            <span class="close"></span>
                            <?php echo Session::get('register_success') ?>
                        </div>
            <?php endif; ?>
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
                    <form action="/dashboard" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="identitas_instansi_perusahaan">Identitas Instansi:</label>
                            <select id="identitas_instansi_perusahaan" onchange="noTelpon(this.value)" class="form-control @error('identitas_instansi_perusahaan') is-invalid @enderror" name="identitas_instansi_perusahaan">
                                <option selected>Sekretariat Daerah</option>
                                <option>Inspektorat</option>
                                <option>Dinas Pendidikan</option>
                                <option>Dinas Kesehatan</option>
                                <option>Dinas Pekerjaan Umum dan Penataan Ruang</option>
                                <option>Dinas Perumahan dan Kawasan Permukiman</option>
                                <option>Satuan Polisi Pamong Praja dan Pemadam Kebakaran</option>
                                <option>Dinas Sosial, Pengendalian Penduduk dan Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak</option>
                                <option>Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah, dan Perindustrian</option>
                                <option>Dinas Perhubungan</option>
                                <option>Dinas Kependudukan dan Pencatatan Sipil</option>
                                <option>Dinas Tenaga Kerja</option>
                                <option>Dinas Pangan dan Pertanian</option>
                                <option>Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olahraga</option>
                                <option>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                                <option>Dinas Lingkungan Hidup</option>
                                <option>Dinas Komunikasi, Informatika, Kearsipan dan Perpustakaan</option>
                                <option>Badan Perencanaan Pembangunan Daerah</option>
                                <option>Badan Pengelola Keuangan dan Aset Daerah</option>
                                <option>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Daerah</option>
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
                            <input type="text" class="form-control" id="no_telpon" placeholder="(Kode Area) Nomor Telpon" name="no_telpon" readonly>
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
    function noTelpon(val) {
        var text;
        if (val === 'Inspektorat') {
            $('#no_telpon').val('(022)6630330 / 6654508');      
        } else if(val === 'Dinas Pendidikan'){
            $('#no_telpon').val('(022)663172');
        } else if(val === 'Dinas Kesehatan'){
            $('#no_telpon').val('(022)6632197');
        } else if(val === 'Dinas Pekerjaan Umum dan Penataan Ruang'){
            $('#no_telpon').val('(022)6631031');
        } else if(val === 'Dinas Perumahan dan Kawasan Permukiman'){
            $('#no_telpon').val('-');
        } else if(val === 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran'){
            $('#no_telpon').val('(022)6642209');
        } else if(val === 'Dinas Sosial, Pengendalian Penduduk dan Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak'){
            $('#no_telpon').val('-');
        } else if(val === 'Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah, dan Perindustrian'){
            $('#no_telpon').val('(022)6631816 / 6631816');
        } else if(val === 'Dinas Perhubungan'){
            $('#no_telpon').val('-');
        } else if(val === 'Dinas Kependudukan dan Pencatatan Sipil'){
            $('#no_telpon').val('-');
        } else if(val === 'Dinas Tenaga Kerja'){
            $('#no_telpon').val('-');
        } else if(val === 'Dinas Pangan dan Pertanian'){
            $('#no_telpon').val('-');
        } else if(val === 'Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olahraga'){
            $('#no_telpon').val('-');
        } else if(val === 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'){
            $('#no_telpon').val('(022)6642036');
        } else if(val === 'Dinas Lingkungan Hidup'){
            $('#no_telpon').val('(022)6632614');
        } else if(val === 'Dinas Komunikasi, Informatika, Kearsipan dan Perpustakaan'){
            $('#no_telpon').val('(022)6642733 / 6642733');
        } else if(val === 'Badan Perencanaan Pembangunan Daerah'){
            $('#no_telpon').val('(022)6642865');
        } else if(val === 'Badan Pengelola Keuangan dan Aset Daerah'){
            $('#no_telpon').val('-');
        } else if(val === 'Sekretariat Daerah'){
            $('#no_telpon').val('6654274 / 6641963');
        } else{
            $('#no_telpon').val('(022)6651001');
        }
        
}
    
</script>
@endsection