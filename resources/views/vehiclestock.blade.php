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
                            <h4 class="card-title mb-0 text-start flex-grow-1">Vehicle Stock</h4>
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
                                    <a href="{{asset('uploads/Admin Panel.xlsx')}}" download="AnantTVSVehicleStockExcelDummy">Download Dummy Excel File Here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example" class="table table-nowrap table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Sno.</th>
                                        <th scope="col">Vehicle Category</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Vehicle Modal</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Frame No.</th>
                                        <th scope="col">Engine No.</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    @foreach ($exceldata as $index => $row)
                                    <tr>
                                        <th scope="row" class="fw-semibold">{{$index +1}}</th>
                                        <td>{{$row->vehiclecategory}}</td>
                                        <td>{{$row->series}}</td>
                                        <td>{{$row->vehiclemodal}}</td>
                                        <td>{{$row->color}}</td>
                                        <td>{{$row->frameno}}</td>
                                        <td>{{$row->engineno}}</td>
                                        <td>
                                            @php
                                            $Status = '';
                                            $Statusclass = '';

                                            switch($row->status) {
                                            case 1:
                                            $Status = 'Out of Stock';
                                            $Statusclass = 'badge bg-danger-subtle text-danger badge-border';
                                            break;
                                            case 0:
                                            $Status = 'In Stock';
                                            $Statusclass = 'badge bg-success-subtle text-success badge-border';
                                            break;
                                            default:
                                            $Status = 'In Stock';
                                            $Statusclass = 'badge bg-warning-subtle text-warning badge-border';
                                            }
                                            @endphp
                                            <span class="{{ $Statusclass }}">{{ $Status }}</span>
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
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                },

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.datebtn').on('click', function() {
                var datefrom = $('#datefrom').val();
                var dateto = $('#dateto').val();
                console.log(datefrom);
                console.log(dateto);

                $.ajax({
                    url: '/datefilterleads',
                    method: 'POST',
                    data: {
                        datefrom: datefrom,
                        dateto: dateto
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        $('#tablebody').empty();
                        response.forEach(function(row) {
                            var formattedDate = new Date(row.created_at)
                                .toLocaleDateString('en-GB', {
                                    day: 'numeric',
                                    month: 'short',
                                    year: 'numeric'
                                });
                            var newRow = `
                        <tr>
                            <th scope="row" class="fw-semibold">${row.id}</th>
                            <td>${formattedDate}</td>
                            <td>${row.name}</td>
                            <td>${row.phoneno}</td>
                            <td>${row.customerstatus}</td>
                            <td>
                                <select class="form-select leadstatus" id="inputGroupSelect01_${row.id}">
                                    <option selected>Choose...</option>
                                    <option value="Closed" ${row.leadstatus == 'Closed' ? 'selected' : ''}>Closed</option>
                                    <option value="Purchased" ${row.leadstatus == 'Purchased' ? 'selected' : ''}>Purchased</option>
                                    <option value="Booked" ${row.leadstatus == 'Booked' ? 'selected' : ''}>Booked</option>
                                </select>
                                <input type="hidden" name="leadid" value="${row.id}" class="leadid">
                            </td>
                        </tr>
                    `;
                            $('#tablebody').append(newRow);
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
