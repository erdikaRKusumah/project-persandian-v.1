@extends('layouts.admin')
@section('content')

@can('result_create')



    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.results.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.result.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.result.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Result">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.result.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.result.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.result.fields.total_points') }}
                        </th>
                        <th>
                            {{ trans('cruds.result.fields.questions') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $key => $result)
                        <tr data-entry-id="{{ $result->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $result->id ?? '' }}
                            </td>
                            <td>
                                {{ $result->user->identitas_instansi_perusahaan ?? '' }}
                            </td>
                            <td>
                                {{ $result->total_points ?? '' }}
                            </td>
                            <td>
                                @foreach($result->questions as $key => $item)
                                    <span class="badge badge-info">{{ $item->question_text }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('result_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.results.show', $result->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('result_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.results.edit', $result->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('result_delete')
                                    <form action="{{ route('admin.results.destroy', $result->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <canvas id="chart"></canvas>
    </div>
</div>



@endsection
@section('scripts')
@parent

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



<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('result_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.results.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Result:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection