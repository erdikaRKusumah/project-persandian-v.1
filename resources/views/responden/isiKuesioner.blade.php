@extends('templates/master')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Isi Kuesioner</h1>
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    <h4 class="mt-3"><strong>Bagian I : Kategori Sistem Elektronik</strong></h4>

                    <p>Bagian ini mengevaluasi tingkat atau kategori sistem elektronik yang digunakan</p>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col" colspan="3"><strong>{{$kategori->sub_kategori}}</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($kategori->pertanyaans as $key=>$pertanyaan)
                        <tr>
                        <th scope="row">1.{{$loop->iteration}}</th>
                        <td colspan="3">{{ $pertanyaan->pertanyaan}}
                        <div> <input type='radio' name='pilihanA' value='A'> {{$pertanyaan->pilihan['0']}}  </div>
                        <div> <input type='radio' name='pilihanB' value='B'> {{$pertanyaan->pilihan['1']}}  </div>
                        <div> <input type='radio' name='pilihanC' value='C'> {{$pertanyaan->pilihan['2']}}  </div>
                        </td>
                        </tr>
                    @endforeach
                        </td>
                        </tr>
                    </tbody>
                    </table>

                    <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                        <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                    </nav>
                                    
                </div>
            </div>        
        </div>    
    </div>
</div>


        <!-- <tr>
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
        <td colspan="3">Jumlah pengguna Sistem Elektronik
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Lebih dari 5.000 pengguna    
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                1.000 sampai dengan 5.000 pengguna 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Kurang dari 1.000 pengguna
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.6</th>
        <td colspan="3">Data pribadi yang dikelola Sistem Elektronik
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Data pribadi yang memiliki hubungan dengan Data Pribadi lainnya   
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Data pribadi yang bersifat individu dan/atau data pribadi yang terkait dengan kepemilikan badan usaha
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Tidak ada data pribadi
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.7</th>
        <td colspan="3">Tingkat klasifikasi/kekritisan Data yang ada dalam Sistem Elektronik, relatif terhadap ancaman upaya penyerangan atau penerobosan keamanan informasi
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Sangat Rahasia
 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Rahasia dan/ atau Terbatas 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Biasa
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.8</th>
        <td colspan="3">Tingkat kekritisan proses yang ada dalam Sistem Elektronik, relatif terhadap ancaman upaya penyerangan atau penerobosan keamanan informasi
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Proses yang berisiko mengganggu hajat hidup orang  banyak dan memberi dampak langsung pada layanan publik  
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Proses yang berisiko mengganggu hajat hidup orang banyak dan memberi dampak tidak langsung
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Proses yang hanya berdampak pada bisnis perusahaan
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.9</th>
        <td colspan="3">Dampak dari kegagalan Sistem Elektronik
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Tidak tersedianya layanan publik berskala nasional atau membahayakan pertahanan keamanan negara 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Tidak tersedianya layanan publik dalam 1 propinsi atau lebih 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Tidak tersedianya layanan publik dalam 1 kabupaten/kota atau lebih 
                </label>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">1.10</th>
        <td colspan="3">Potensi kerugian atau dampak negatif dari insiden ditembusnya keamanan informasi Sistem Elektronik (sabotase, terorisme)
        <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                Menimbulkan korban jiwa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Terbatas pada kerugian finansial
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios2">
                Mengakibatkan gangguan operasional sementara ( tidak membahayakan dan mengakibatkan kerugian finansial )
                </label>
            </div>
        </td>
        </tr> -->

    

    


@endsection