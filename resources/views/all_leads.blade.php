{{-- -----------------------------------------------🙏JAI SHREE
RAM🚩------------------------------------------------------------- --}}
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
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                            data-target="{{ $leadscount }}">{{ $leadscount }}</span>
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
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                            data-target="{{ $bookedleads }}">{{ $bookedleads }}</span>
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
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                            data-target="{{ $purchasedleads }}">{{ $purchasedleads }}</span>
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
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                            data-target="{{ $closedleads }}">{{ $closedleads }}</span>
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
                                                <input type="date" name="datefrom" class="form-control"
                                                    id="datefrom">
                                            </div>
                                            <div>
                                                <label for="exampleInputdate" class="form-label">To</label>
                                                <input type="date" name="dateto" class="form-control"
                                                    id="dateto">
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
                <div class="col-xxl-12">
                    <div class="card">
                        {{-- <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">All Leads</h4>
                            <div class="flex-shrink-0">
                            </div>
                        </div> --}}
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-border-top nav-justified gap-2 mb-3 " role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active tabtype" data-value="customerleads"
                                        data-bs-toggle="tab" href="#animation-home" role="tab">
                                        Customer Leads
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link tabtype" data-value="testrideleads" data-bs-toggle="tab"
                                        href="#animation-profile" role="tab">
                                        Test Ride Leads
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link tabtype" data-value="requestleads" data-bs-toggle="tab"
                                        href="#animation-messages" role="tab">
                                        Request Leads
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="animation-home" role="tabpanel">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 ms-2">
                                            <div class="card">
                                                @if ($mymess = Session::get('success'))
                                                    <div class="alert border-0 alert-success text-center"
                                                        role="alert" id="successAlert">
                                                        <strong>{{ $mymess }}</strong>
                                                    </div>
                                                @endif
                                                @if ($mymess = Session::get('error'))
                                                    <div class="alert border-0 alert-danger text-center"
                                                        role="alert" id="dangerAlert">
                                                        <strong>{{ $mymess }}</strong>
                                                    </div>
                                                @endif
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">All Leads</h4>
                                                    <div class="flex-shrink-0">
                                                    </div>
                                                </div>
                                                <div class="card-body table-responsive">
                                                    <table id="example" class="table table-nowrap table-bordered"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Lead Date</th>
                                                                <th scope="col">Customer Name</th>
                                                                <th scope="col">Mobile No.</th>
                                                                <th scope="col">Customer Status</th>
                                                                <th scope="col">Vehicle Name</th>
                                                                <th scope="col">Update Lead Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tablebody">
                                                            @foreach ($leaddata as $index => $row)
                                                                <tr>
                                                                    <th scope="row" class="fw-semibold">
                                                                        {{ $index + 1 }}</th>
                                                                    <td>{{ $row->created_at->format('d/m/y') }}</td>
                                                                    <td>{{ $row->name }}</td>
                                                                    <td>{{ $row->phoneno }}</td>
                                                                    <td>{{ $row->customerstatus }}</td>
                                                                    <td>{{ $row->vehiclename }}</td>
                                                                    <td>
                                                                        <select class="form-select leadstatus"
                                                                            id="inputGroupSelect01_${{ $row->id }}">
                                                                            <option selected>Choose...</option>
                                                                            <option value="Closed"
                                                                                {{ $row->leadstatus == 'Closed' ? 'selected' : '' }}>
                                                                                Closed</option>
                                                                            <option value="Purchased"
                                                                                {{ $row->leadstatus == 'Purchased' ? 'selected' : '' }}>
                                                                                Purchased</option>
                                                                            <option value="Booked"
                                                                                {{ $row->leadstatus == 'Booked' ? 'selected' : '' }}>
                                                                                Booked</option>
                                                                        </select>
                                                                        <input type="hidden" name="leadid"
                                                                            value="{{ $row->id }}"
                                                                            class="leadid">
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="animation-profile" role="tabpanel">
                                    <div class="d-flex mt-2">
                                        <div class="flex-grow-1 ms-2">
                                            <div class="card">
                                                @if ($mymess = Session::get('success'))
                                                    <div class="alert border-0 alert-success text-center"
                                                        role="alert" id="successAlert">
                                                        <strong>{{ $mymess }}</strong>
                                                    </div>
                                                @endif
                                                @if ($mymess = Session::get('error'))
                                                    <div class="alert border-0 alert-danger text-center"
                                                        role="alert" id="dangerAlert">
                                                        <strong>{{ $mymess }}</strong>
                                                    </div>
                                                @endif
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Test Ride Leads</h4>
                                                    <div class="flex-shrink-0">
                                                    </div>
                                                </div>
                                                <div class="card-body table-responsive">
                                                    <table id="exampletestride"
                                                        class="table table-nowrap table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Lead Date</th>
                                                                <th scope="col">Customer Name</th>
                                                                <th scope="col">Mobile No.</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Vehicle Name</th>
                                                                <th scope="col">Update Lead Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tablebodytestride">
                                                            @foreach ($testrideleads as $index => $testride)
                                                                <tr>
                                                                    <th scope="row" class="fw-semibold">
                                                                        {{ $index + 1 }}</th>
                                                                    <td>{{ $testride->created_at->format('d/m/y') }}
                                                                    </td>
                                                                    <td>{{ $testride->customername }}</td>
                                                                    <td>{{ $testride->customerphoneno }}</td>
                                                                    <td>{{ $testride->type }}</td>
                                                                    <td>{{ $testride->vehicle }}</td>
                                                                    <td>
                                                                        <select class="form-select testrideleadstatus"
                                                                            id="inputGroupSelect01_${{ $testride->id }}">
                                                                            <option selected>Choose...</option>
                                                                            <option value="Closed"
                                                                                {{ $testride->leadstatus == 'Closed' ? 'selected' : '' }}>
                                                                                Closed</option>
                                                                            <option value="Purchased"
                                                                                {{ $testride->leadstatus == 'Purchased' ? 'selected' : '' }}>
                                                                                Purchased</option>
                                                                            <option value="Booked"
                                                                                {{ $testride->leadstatus == 'Booked' ? 'selected' : '' }}>
                                                                                Booked</option>
                                                                        </select>
                                                                        <input type="hidden" name="leadid"
                                                                            value="{{ $testride->id }}"
                                                                            class="leadid">
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="animation-messages" role="tabpanel">
                                    <div class="d-flex mt-2">
                                        <div class="flex-grow-1 ms-2">
                                            <div class="card">
                                                @if ($mymess = Session::get('success'))
                                                    <div class="alert border-0 alert-success text-center"
                                                        role="alert" id="successAlert">
                                                        <strong>{{ $mymess }}</strong>
                                                    </div>
                                                @endif
                                                @if ($mymess = Session::get('error'))
                                                    <div class="alert border-0 alert-danger text-center"
                                                        role="alert" id="dangerAlert">
                                                        <strong>{{ $mymess }}</strong>
                                                    </div>
                                                @endif
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Request Leads</h4>
                                                    <div class="flex-shrink-0">
                                                    </div>
                                                </div>
                                                <div class="card-body table-responsive">
                                                    <table id="examplemakereq"
                                                        class="table table-nowrap table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Lead Date</th>
                                                                <th scope="col">Requested Phone Number</th>
                                                                <th scope="col">Request Comments</th>
                                                                <th scope="col">Update Lead Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tablebodymakereq">
                                                            @foreach ($makerequestleads as $index => $makereq)
                                                                <tr>
                                                                    <th scope="row" class="fw-semibold">
                                                                        {{ $index + 1 }}</th>
                                                                    <td>{{ $makereq->created_at->format('d/m/y') }}
                                                                    </td>
                                                                    <td>{{ $makereq->requestphoneno }}</td>
                                                                    <td>{{ $makereq->requestcomments }}</td>
                                                                    <td>
                                                                        <select class="form-select makerequestleads"
                                                                            id="inputGroupSelect01_${{ $makereq->id }}">
                                                                            <option selected>Choose...</option>
                                                                            <option value="Closed"
                                                                                {{ $makereq->leadstatus == 'Closed' ? 'selected' : '' }}>
                                                                                Closed</option>
                                                                            <option value="Purchased"
                                                                                {{ $makereq->leadstatus == 'Purchased' ? 'selected' : '' }}>
                                                                                Purchased</option>
                                                                            <option value="Booked"
                                                                                {{ $makereq->leadstatus == 'Booked' ? 'selected' : '' }}>
                                                                                Booked</option>
                                                                        </select>
                                                                        <input type="hidden" name="leadid"
                                                                            value="{{ $makereq->id }}"
                                                                            class="leadid">
                                                                    </td>
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
                        </div><!-- end card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Date Filter Code -----------------------DEKHA Bhul gaya naa tu aagaya naa main kaam --}}
    <script>
        $(document).ready(function() {
            var selectedType = 'customerleads';

            // Initialize DataTables for each table
            var dataTableCustomer = $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });
            var dataTableTestRide = $('#exampletestride').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });
            var dataTableMakeReq = $('#examplemakereq').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });

            // When a tab is clicked, update the selectedType
            $('.tabtype').on('click', function() {
                selectedType = $(this).data('value');
            });

            $('.datebtn').on('click', function() {
                var datefrom = $('#datefrom').val();
                var dateto = $('#dateto').val();

                console.log(datefrom);
                console.log(dateto);
                console.log(selectedType);

                $.ajax({
                    url: '/datefilterleads',
                    method: 'POST',
                    data: {
                        datefrom: datefrom,
                        dateto: dateto,
                        type: selectedType,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log("Filtered data : ", response);

                        if (selectedType == 'customerleads') {
                            dataTableCustomer.clear()
                        .destroy(); // Properly destroy the existing DataTable instance
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
                                    <td>${row.vehiclename}</td>
                                    <td>
                                        <select class="form-select leadstatus" id="inputGroupSelect01_${row.id}">
                                            <option selected>Choose...</option>
                                            <option value="Closed" ${row.leadstatus == 'Closed' ? 'selected' : ''}>Closed</option>
                                            <option value="Purchased" ${row.leadstatus == 'Purchased' ? 'selected' : ''}>Purchased</option>
                                            <option value="Booked" ${row.leadstatus == 'Booked' ? 'selected' : ''}>Booked</option>
                                        </select>
                                        <input type="hidden" name="leadid" value="${row.id}" class="leadid">
                                    </td>
                                </tr>`;
                                $('#tablebody').append(newRow);
                            });
                            // Reinitialize DataTable
                            dataTableCustomer = $('#examplecustomer').DataTable({
                                layout: {
                                    topStart: {
                                        buttons: ['copy', 'csv', 'excel', 'pdf',
                                            'print']
                                    }
                                }
                            });
                        }

                        if (selectedType == 'testrideleads') {
                            dataTableTestRide.clear()
                                .destroy(); // Properly destroy the existing DataTable instance
                            $('#tablebodytestride').empty();
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
                                    <td>${row.customername}</td>
                                    <td>${row.customerphoneno}</td>
                                    <td>${row.type}</td>
                                    <td>${row.vehicle}</td>
                                    <td>
                                        <select class="form-select leadstatus" id="inputGroupSelect01_${row.id}">
                                            <option selected>Choose...</option>
                                            <option value="Closed" ${row.leadstatus == 'Closed' ? 'selected' : ''}>Closed</option>
                                            <option value="Purchased" ${row.leadstatus == 'Purchased' ? 'selected' : ''}>Purchased</option>
                                            <option value="Booked" ${row.leadstatus == 'Booked' ? 'selected' : ''}>Booked</option>
                                        </select>
                                        <input type="hidden" name="leadid" value="${row.id}" class="leadid">
                                    </td>
                                </tr>`;
                                $('#tablebodytestride').append(newRow);
                            });
                            // Reinitialize DataTable
                            dataTableTestRide = $('#exampletestride').DataTable({
                                layout: {
                                    topStart: {
                                        buttons: ['copy', 'csv', 'excel', 'pdf',
                                            'print']
                                    }
                                }
                            });
                        }

                        if (selectedType == 'requestleads') {
                            dataTableMakeReq.clear()
                                .destroy(); // Properly destroy the existing DataTable instance
                            $('#tablebodymakereq').empty();
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
                                    <td>${row.requestphoneno}</td>
                                    <td>${row.requestcomments}</td>
                                    <td>
                                        <select class="form-select leadstatus" id="inputGroupSelect01_${row.id}">
                                            <option selected>Choose...</option>
                                            <option value="Closed" ${row.leadstatus == 'Closed' ? 'selected' : ''}>Closed</option>
                                            <option value="Purchased" ${row.leadstatus == 'Purchased' ? 'selected' : ''}>Purchased</option>
                                            <option value="Booked" ${row.leadstatus == 'Booked' ? 'selected' : ''}>Booked</option>
                                        </select>
                                        <input type="hidden" name="leadid" value="${row.id}" class="leadid">
                                    </td>
                                </tr>`;
                                $('#tablebodymakereq').append(newRow);
                            });
                            // Reinitialize DataTable
                            dataTableMakeReq = $('#examplemakereq').DataTable({
                                layout: {
                                    topStart: {
                                        buttons: ['copy', 'csv', 'excel', 'pdf',
                                            'print'
                                        ]
                                    }
                                }
                            });
                        }
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

    {{-- Bassss hawaaaaa nickl gaiiii😂😂😂 --}}
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
        $(document).ready(function() {
            var leadid;
            $('.testrideleadstatus').change(function() {
                var selectedStatus = $(this).val();
                leadid = $(this).closest('td').find('.leadid').val();
                console.log(leadid);
                console.log(selectedStatus);

                //Updating Lead Status
                $.ajax({
                    url: '/updatetestrideleadstatus',
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
        $(document).ready(function() {
            var leadid;
            $('.makerequestleads').change(function() {
                var selectedStatus = $(this).val();
                leadid = $(this).closest('td').find('.leadid').val();
                console.log(leadid);
                console.log(selectedStatus);

                //Updating Lead Status
                $.ajax({
                    url: '/updatemakerequestleads',
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
