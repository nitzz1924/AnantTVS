{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
<div class="page-content">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css">
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Anant TVS</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>
                            <li class="breadcrumb-item active">Sold Vehicles</li>
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
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="card tablecard h-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Sold Vehicles</h4>
                        <div class="flex-shrink-0">
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-nowrap table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">S.No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Vehicle</th>
                                    <th scope="col">Chassiss Number</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">RC-Number</th>
                                    <th scope="col">Invoice-Number</th>
                                    <th scope="col">Insurance-ID</th>
                                </tr>
                            </thead>
                            <tbody id="buyedvehiclesbody">
                                @foreach ($allbuyeddata as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->created_at->format('d/m/y') }}</td>
                                    <td>{{ $row->customername }}</td>
                                    <td>{{ $row->customerphoneno }}</td>
                                    <td>{{ $row->vehicle_id }}</td>
                                    <td>{{ $row->chassisnumber }}</td>
                                    <td>{{ $row->color }}</td>
                                    <td>{{ $row->rcnumber }}</td>
                                    <td>{{ $row->invoicenumber }}</td>
                                    <td>{{ $row->insuranceid }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            console.log(datefrom);
            console.log(dateto);

            $.ajax({
                url: '/datefilterbuyedvehicle',
                method: 'POST',
                data: {
                    datefrom: datefrom,
                    dateto: dateto,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    dataTableCustomer.clear().destroy(); // Properly destroy the existing DataTable instance
                    $('#buyedvehiclesbody').empty();
                    response.forEach(function(row, index) {
                        var formattedDate = new Date(row.created_at)
                            .toLocaleDateString('en-GB', {
                                day: 'numeric',
                                month: 'short',
                                year: 'numeric'
                            });
                        var newRow = `
                                <tr>
                                    <td>${index+1}</td>
                                    <td>${formattedDate}</td>
                                    <td>${row.customername}</td>
                                    <td>${row.customerphoneno}</td>
                                    <td>${row.vehicle_id}</td>
                                    <td>${row.chassisnumber}</td>
                                    <td>${row.color}</td>
                                    <td>${row.rcnumber}</td>
                                    <td>${row.invoicenumber}</td>
                                    <td>${row.insuranceid}</td>
                                </tr>
                `;
                        $('#buyedvehiclesbody').append(newRow);
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
</x-app-layout>
