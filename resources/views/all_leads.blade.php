{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Leads</a></li>
                                <li class="breadcrumb-item active">All Leads</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        All Leads</p>
                                </div>
                                {{-- <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">
                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                        +16.24 %
                                    </h5>
                                </div> --}}
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value"
                                            data-target="{{$leadscount}}">{{$leadscount}}</span>
                                    </h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bx-list-ul  text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Booked</p>
                                </div>
                                {{-- <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">
                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                        +16.24 %
                                    </h5>
                                </div> --}}
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value"
                                            data-target="{{$bookedleads}}">{{$bookedleads}}</span>
                                    </h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bxs-book  text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Purchased</p>
                                </div>
                                {{-- <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">
                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                        +16.24 %
                                    </h5>
                                </div> --}}
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value"
                                            data-target="{{$purchasedleads}}">{{$purchasedleads}}</span>
                                    </h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bx-purchase-tag-alt  text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Closed</p>
                                </div>
                                {{-- <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">
                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                        +16.24 %
                                    </h5>
                                </div> --}}
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value"
                                            data-target="{{$closedleads}}">{{$closedleads}}</span>
                                    </h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bx-window-close text-success"></i>
                                    </span>
                                </div>
                            </div>
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
                                        <th scope="col">Update Lead Status</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    @foreach ($leaddata as $index => $row )
                                    <tr>
                                        <th scope="row" class="fw-semibold">{{$index + 1}}</th>
                                        <td>{{$row->created_at->format('d/m/y')}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->phoneno}}</td>
                                        <td>{{$row->customerstatus}}</td>
                                        <td>
                                            <select class="form-select leadstatus"
                                                id="inputGroupSelect01_${{$row->id}}">
                                                <option selected>Choose...</option>
                                                <option value="Closed" {{$row->leadstatus == 'Closed' ? 'selected' :
                                                    ''}}>Closed</option>
                                                <option value="Purchased" {{$row->leadstatus == 'Purchased' ? 'selected'
                                                    : ''}}>Purchased</option>
                                                <option value="Booked" {{$row->leadstatus == 'Booked' ? 'selected' :
                                                    ''}}>Booked</option>
                                            </select>
                                            <input type="hidden" name="leadid" value="{{$row->id}}" class="leadid">
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
