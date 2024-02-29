{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
        <style>
           table.dataTable th.dt-type-numeric, table.dataTable th.dt-type-date, table.dataTable td.dt-type-numeric, table.dataTable td.dt-type-date{
                text-align: left !important;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Anant TVS</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Leads</a></li>
                                <li class="breadcrumb-item active">All Leads</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if ($mymess = Session::get('success'))
                            <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                                <strong>{{ $mymess }}</strong>
                            </div>
                        @endif
                        @if ($mymess = Session::get('error'))
                            <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                                <strong>{{ $mymess }}</strong>
                            </div>
                        @endif
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">All Leads</h4>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example" class="table table-nowrap table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Lead Date</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Mobile No.</th>
                                        <th scope="col">Customer Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leaddata as $index => $row)
                                        <tr>
                                            <th scope="row" class="fw-semibold">{{ $index + 1 }}</th>
                                            <td>{{ $row->created_at->format('d/M/y | h:i A') }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->phoneno }}</td>
                                            <td>{{ $row->customerstatus }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {{ $leaddata->links('pagination::bootstrap-4') }} <!--Pagination-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
 <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });


        });
    </script>

    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
</x-app-layout>
