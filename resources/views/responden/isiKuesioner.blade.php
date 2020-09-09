@extends('templates/master')

@section('container')
<h1>Isi Kuesioner</h1>
    <div class="progress" style="height: 1px;">
        <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress" style="height: 20px;">
        <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
<h4><strong>Bagian I : Kategori Sistem Elektronik</strong></h4>

<p>Bagian ini mengevaluasi tingkat atau kategori sistem elektronik yang digunakan</p>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" colspan="3"><strong>Karakteristik Instansi/Perusahaan</strong></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1.1</th>
        <td colspan="3">Nilai investasi sistem elektronik yang terpasang
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Lebih dari Rp.30 Miliar 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Lebih dari Rp.3 Miliar s/d Rp.30 Miliar 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Kurang dari Rp.3 Miliar
                </label>
            </div>

        </td>
        </tr>
        <tr>
        <th scope="row">1.2</th>
        <td colspan="3">Total anggaran operasional tahunan yang dialokasikan untuk pengelolaan Sistem Elektronik
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Lebih dari Rp.10 Miliar 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Lebih dari Rp.1 Miliar s/d Rp.10 Miliar 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Kurang dari Rp.1 Miliar
                </label>
            </div>
            
        </td>
        </tr>
        <tr>
        <th scope="row">1.3</th>
        <td colspan="3">Memiliki kewajiban kepatuhan terhadap Peraturan atau Standar tertentu
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Peraturan atau Standar nasional dan internasional  
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Peraturan atau Standar nasional  
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Tidak ada Peraturan khusus
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.4</th>
        <td colspan="3">Menggunakan teknik kriptografi khusus untuk keamanan informasi dalam Sistem Elektronik
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Teknik kriptografi khusus yang disertifikasi oleh Negara    
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Teknik kriptografi sesuai standar industri, tersedia secara publik atau dikembangkan sendiri 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Tidak ada penggunaan teknik kriptografi 
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.5</th>
        <td colspan="3">Larry the Bird</td>
        </tr>
        <tr>
        <th scope="row">1.6</th>
        <td colspan="3">Mark</td>
        </tr>
        <tr>
        <th scope="row">1.7</th>
        <td colspan="3">Jacob</td>
        </tr>
        <tr>
        <th scope="row">1.8</th>
        <td colspan="3">Larry the Bird</td>
        </tr>
        <tr>
        <th scope="row">1.9</th>
        <td colspan="3">Larry the Bird</td>
        </tr>
        <tr>
        <th scope="row">1.10</th>
        <td colspan="3">Larry the Bird</td>
        </tr>

    </tbody>
    </table>


@endsection