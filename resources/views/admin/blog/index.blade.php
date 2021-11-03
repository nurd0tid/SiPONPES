@extends('layouts.app')
@section('container')
@push('button-datatables')
<style type="text/css" class="init">
  div.dt-buttons {
    position: relative;
    float: left
  }

  button#btn_delete {
    position: relative;
    float: left
  }

  #table tr {
    text-align: center
  }
</style>
@endpush
@push('css-toast')
    <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
@endpush
@push('css-datatables')
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endpush
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Export Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="table" style="width:100%;">
                <thead>
                  <tr style="text-align: center;">
                    <th style="width: 5px">#</th>
                    <th style="width: 80px;">Title</th>
                    <th style="width: 120px;">Slug</th>
                    <th style="width: 380px;">Excerpt</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@push('js-datatables')
<script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/page/datatables.js') }}"></script>
@endpush
@push('serverside')
<script>
  $(document).ready(function() {
    $('#table').DataTable({
      processing: true,
      serverSide: true,
      // stateSave: true,
      dom: 'Blfrtip',
      select: true,
      lengthMenu: [
        [5, 10, 25, 100, -1],
        [5, 10, 25, 100, 'Show All']
      ],
      ajax: {
        url: "{{ Route('blogJson') }}"
      },
      columns: [{
          "data": null,
          "sortable": false,
          render: function(data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
          }
        },
        {
          data: 'title'
        },
        {
          data: 'slug'
        },
        {
          data: 'excerpt'
        },
        {
            render: function(data, type, row) {
                var html = ""
                if (row.status == "Publish") {
                    html = '<span class="badge badge-success">Publish</span>'
                } else {
                    html = '<span class="badge badge-warning">Draft</span>'
                }
                return html;
            }
        },
        {
          data: 'action',
          orderable: false, 
          searchable: false
        }
      ]
    })
  })
</script>
@endpush
@push('js-toast')
  <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
@endpush
@push('popup-toast')
  @if(session()->has('success'))
  <script>
      $(function() {
      iziToast.success({
        title: '👋',
        message: '{{ session("success") }}.',
        position: 'topRight'
      });      
    });
  </script> 
  @endif  
@endpush
<!-- END: Content-->
@endsection()