@extends('layouts.app')
@section('container')
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
                  <tr>
                    <!-- <th>ID</th> -->
                    <th>Image</th>
                    <th>Title</th>
                    <!-- <th>Action</th> -->
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
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
@endpush
@push('serverside')
<script>
  $(document).ready(function() {
    isi()
  })

  function isi() {
    $('#table').DataTable({
      serverside: true,
      responsive: true,
      ajax: {
        url: "{{ Request::is('blog') }}"
      },
      columns: [{
          data: 'image',
          name: 'image'
        },
        {
          data: 'title',
          name: 'title'
        },
      ]
    })
  }
</script>
@endpush
<!-- END: Content-->
@endsection()