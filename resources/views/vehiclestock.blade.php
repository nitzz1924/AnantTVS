{{-- -----------------------------------------------🙏JAI SHREE
RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
        <style>
            table.dataTable th.dt-type-numeric,
            table.dataTable th.dt-type-date,
            table.dataTable td.dt-type-numeric,
            table.dataTable td.dt-type-date {
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Vehicle Stock</a></li>
                                <li class="breadcrumb-item active">Vehicle Stock</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="listjs-table" id="customerList">
                                <form>
                                    <div class="row g-4 mb-3">
                                        <div
                                            class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                            <div>
                                                <label for="exampleInputdate" class="form-label">From</label>
                                                <input type="date" name="datefrom" class="form-control" id="datefrom">
                                            </div>
                                            <div>
                                                <label for="exampleInputdate" class="form-label">To</label>
                                                <input type="date" name="dateto" class="form-control" id="dateto">
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success add-btn datebtn"><i
                                                        class="ri-search-eye-line align-bottom me-1"></i>Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                        <div class="card-header align-items-center  d-flex flex-column flex-sm-row">
                            @php
                                $urlvalue = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                                // echo $urlvalue;
                                $cardTitle = '';

                                if ($urlvalue == 0) {
                                    $cardTitle = "In Stock";
                                } elseif ($urlvalue == 1) {
                                    $cardTitle = "Out of Stock";
                                } elseif ($urlvalue == 2) {
                                    $cardTitle = "Returned Vehicles";
                                }
                                @endphp
                                <h4 class="card-title mb-0 text-start flex-grow-1" id="card-title">
                                    {{ $cardTitle }}
                                </h4>
                            <div class="">
                                <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex align-items-end">
                                        <div class="text-end">
                                            <label for="file">Bulk Upload of Vehicle</label>
                                            <input type="file" name="file" id="file" class="form-control">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary ms-2">Import</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="mt-3">
                                    <a href="{{ asset('uploads/Admin Panel.xlsx') }}"
                                        download="AnantTVSVehicleStockExcelDummy">Download Dummy Excel File Here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example" class="table table-nowrap table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Sno.</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Vehicle Category</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Vehicle Modal</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Frame No.</th>
                                        <th scope="col">Engine No.</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="vehiclestockbody">
                                    @foreach ($exceldata as $index => $row)
                                    <tr>
                                        <th scope="row" class="fw-semibold">{{ $index + 1 }}</th>
                                        <th>{{ $row->created_at->format('d/m/y') }}</th>
                                        <td>{{ $row->vehiclecategory }}</td>
                                        <td>{{ $row->series }}</td>
                                        <td>{{ $row->vehiclemodal }}</td>
                                        <td>{{ $row->color }}</td>
                                        <td>{{ $row->frameno }}</td>
                                        <td>{{ $row->engineno }}</td>
                                        <td>
                                            @php
                                            $Status = '';
                                            $Statusclass = '';

                                            switch ($row->status) {
                                            case 1:
                                            $Status = 'Out of Stock';
                                            $Statusclass =
                                            'badge bg-danger-subtle text-danger badge-border';
                                            break;
                                            case 0:
                                            $Status = 'In Stock';
                                            $Statusclass =
                                            'badge bg-success-subtle text-success badge-border';
                                            break;
                                            default:
                                            $Status = 'In Stock';
                                            $Statusclass =
                                            'badge bg-warning-subtle text-warning badge-border';
                                            }
                                            @endphp
                                            <span class="{{ $Statusclass }}">{{ $Status }}</span>
                                        </td>
                                        <td>
                                            <a href="#"><button class="btn btn-outline-danger btn-sm  delete-button"
                                                    id="sa-warning{{ $row->id }}" data-id="{{ $row->id }}"><i
                                                        class="bx bxs-trash"></i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination justify-content-end">
                                {{ $leaddata->links('pagination::bootstrap-4') }}
                                <!--Pagination-->
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#example').DataTable();

            // dynamically delete of pop up
            $(document).on('click', '.delete-button', function() {
                var recordId = $(this).data('id');
                console.log(recordId);
                Swal.fire({
                    title: "Are you sure?",
                    text: "You want to delete....?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                    cancelButtonClass: "btn btn-danger w-xs mt-2",
                    confirmButtonText: '<a href="/deletestock/' + recordId + '" class="text-white">Yes, delete it!</a>',
                    buttonsStyling: false,
                    showCloseButton: true,
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables for each table
            var dataTableCustomer = $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });
            $('.datebtn').on('click', function() {
                var datefrom = $('#datefrom').val();
                var dateto = $('#dateto').val();
                var value = window.location.pathname.split('/').pop();
                console.log(value);
                console.log(datefrom);
                console.log(dateto);

                $.ajax({
                    url: '/datefilteroutofstock',
                    method: 'POST',
                    data: {
                        datefrom: datefrom,
                        dateto: dateto,
                        status: value,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        dataTableCustomer.clear()
                            .destroy(); // Properly destroy the existing DataTable instance
                        $('#vehiclestockbody').empty();
                        response.forEach(function(row, index) {
                            var formattedDate = new Date(row.created_at)
                                .toLocaleDateString('en-GB', {
                                    day: 'numeric',
                                    month: 'short',
                                    year: 'numeric'
                                });
                            var Status = '';
                            var Statusclass = '';

                            switch (row.status) {
                                case 1:
                                    Status = 'Out of Stock';
                                    Statusclass =
                                        'badge bg-danger-subtle text-danger badge-border';
                                    break;
                                case 0:
                                    Status = 'In Stock';
                                    Statusclass =
                                        'badge bg-success-subtle text-success badge-border';
                                    break;
                                default:
                                    Status = 'In Stock';
                                    Statusclass =
                                        'badge bg-success-subtle text-success badge-border';
                            }
                            var newRow = `
                        <tr>
                            <th scope="row" class="fw-semibold">${index+1}</th>
                            <td>${formattedDate}</td>
                            <td>${row.vehiclecategory}</td>
                            <td>${row.series}</td>
                            <td>${row.vehiclemodal}</td>
                            <td>${row.color}</td>
                            <td>${row.frameno}</td>
                            <td>${row.engineno}</td>
                            <td>
                                <span class="${Statusclass}">${Status}</span>
                            </td>
                            <td>
                            <a href="#"><button class="btn btn-outline-danger btn-sm"
                                id="sa-warning${row.id}">delete</button></a>
                            </td>
                        </tr>
                    `;
                            $('#vehiclestockbody').append(newRow);
                        });
                        // Reinitialize DataTable
                        dataTableMakeReq = $('#example').DataTable({
                            layout: {
                                topStart: {
                                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                                }
                            }
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var leadid;
            $('.leadstatus').change(function() {
                var selectedStatus = $(this).val();
                leadid = $(this).closest('td').find('.leadid').val();
                console.log(leadid);
                console.log(selectedStatus);

                //Updating Lead Status
                $.ajax({
                    url: '/updateleadstatus',
                    method: 'POST',
                    data: {
                        status: selectedStatus,
                        record_id: leadid
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
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
