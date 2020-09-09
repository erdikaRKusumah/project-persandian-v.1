
@extends ('templates/masterAdmin')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Halaman Admin</h1>
<div class="container">


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori</th>
      <th scope="col">Sub-Kategori</th>
    </tr>
  </thead>
  <tbody>
    @foreach($kategori as $kat)
    <tr>
      <th scope="row"> {{ $loop->iteration}} </th>
      <td> {{ $kat->kategori }} </td>
      <td> {{ $kat->sub_kategori }} </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection