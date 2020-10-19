@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.result.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.id') }}
                        </th>
                        <td>
                            {{ $result->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.user') }}
                        </th>
                        <td>
                            {{ $result->user->identitas_instansi_perusahaan ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.total_points') }}
                        </th>
                        <td>
                            {{ $result->total_points }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.questions') }}
                        </th>
                        <td>
                            @foreach($result->questions as $key => $questions)
                                <span class="label label-info">{{ $questions->question_text }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
        <canvas id="chart"></canvas>
    </div>
</div>



<!-- canvas script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('chart').getContext('2d');


var chart = new Chart(ctx, {
    type: 'radar',

    data: {
        labels: ['Tata Kelola', 'Pengelolaan Risiko', 'Kerangka Kerja', 
        'Pengelolaan Aset', 'Aspek Teknologi'],
        datasets: [{
            label: ' of Votes',
            data: ['12','14','2','4'],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 0
        }]
    },
    options: 
    {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

@endsection