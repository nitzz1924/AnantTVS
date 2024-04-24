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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Customers</a></li>
                                <li class="breadcrumb-item active">All Customers</li>
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
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">All Customers</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    {{-- <a href="{{ route('createcustomer') }}"><button type="button"
                                            class="btn btn-secondary waves-effect waves-light">Go Back</button></a> --}}
                                    <a href="{{ route('viewaddcustomer') }}"><button type="button"
                                            class="btn btn-success waves-effect waves-light">Add New
                                            Customer</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example" class="table table-nowrap table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile No.</th>
                                        <th scope="col">E-Mail</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Address</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    @foreach ($allcustomers as $index => $row)
                                    <tr>
                                        <th scope="row" class="fw-semibold">{{ $index + 1 }}</th>
                                        <td>{{ $row->created_at->format('d/m/y') }}</td>
                                        <td>{{ $row->customername }}</td>
                                        <td>{{ $row->customerphoneno }}</td>
                                        <td>{{ $row->customeremailaddress }}</td>
                                        <td>{{ $row->customercity }}</td>
                                        <td>{{ $row->customerstate }}</td>
                                        <td>{{ $row->customercountry }}</td>
                                        <td>{{ $row->customeraddress }}</td>
                                        <td>
                                            <a href="/viewbuyvehicles/{{ $row->id }}">
                                                <button class="btn btn-outline-success" id="openModalBtnone">Buy
                                                    Vehicle</button>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#" data-bs-target="#myModal"
                                                            data-record-id="{{ json_encode($row) }}"
                                                            id="openModalBtnone" data-bs-toggle="modal"
                                                            class="dropdown-item openModalBtn"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"
                                                            href="/editcustomer/{{$row->id}}"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <a href="/viewuservehicles/{{$row->id}}"
                                                            class="dropdown-item remove-item-btn">
                                                            <i class="ri-car-fill align-bottom me-2 text-muted"></i>All
                                                            Vehicles
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="dropdown-item remove-item-btn"
                                                            id="sa-warning{{ $row->id }}">
                                                            <i class=" ri-delete-bin-fill
                                                                    align-bottom me-2 text-muted"></i>Remove
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination justify-content-end">
                                {{ $allcustomers->links('pagination::bootstrap-4') }}
                                <!--Pagination-->
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal zoomIn" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-heading">Customer Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body" id="modalbody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>

            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach ($allcustomers as $row)
                document.getElementById("sa-warning{{ $row->id }}").addEventListener("click", function() {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to delete this Customer..?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                        cancelButtonClass: "btn btn-danger w-xs mt-2",
                        confirmButtonText: '<a href="/deleteparticularcustomer/{{$row->id}}" class="text-white">Yes, delete it!</a>',
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                });
            @endforeach
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datebtn').on('click', function() {
                var datefrom = $('#datefrom').val();
                var dateto = $('#dateto').val();

                $.ajax({
                    url: '/datefiltercustomers',
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
                        $.each(response, function(index, row) {
                            var newRow = `
                                <tr>
                                    <th scope="row" class="fw-semibold">${index + 1}</th>
                                    <td><?php echo date('d/m/y', strtotime($row['created_at'])); ?></td>
                                    <td>${row.customername}</td>
                                    <td>${row.customerphoneno}</td>
                                    <td>${row.customeremailaddress}</td>
                                    <td>${row.customercity}</td>
                                    <td>${row.customerstate}</td>
                                    <td>${row.customercountry}</td>
                                    <td>${row.customeraddress}</td>
                                    <td>
                                        <a href="/viewbuyvehicles/${row.id}">
                                            <button class="btn btn-outline-success" id="openModalBtnone">Buy Vehicle</button>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#" data-bs-target="#myModal" data-record-id="${JSON.stringify(row)}"
                                                        id="openModalBtnone" data-bs-toggle="modal"
                                                        class="dropdown-item openModalBtn"><i
                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"
                                                        href="/editcustomer/${row.id}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a></li>
                                                <li><a href="/viewuservehicles/${row.id}" class="dropdown-item remove-item-btn">
                                                        <i class="ri-car-fill align-bottom me-2 text-muted"></i>All Vehicles</a>
                                                </li>
                                                <li><a href="#" class="dropdown-item remove-item-btn"
                                                        id="sa-warning${row.id}"><i class="ri-delete-bin-fill
                                                            align-bottom me-2 text-muted"></i>Remove</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>`;
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
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
    <script>
        $(document).ready(function() {
            $('.openModalBtn').on('click', function() {
                var recordId = $(this).data('record-id');
                console.log(recordId);
                $('#modalbody').empty();
                var columntwo = `
                    <div class="row">
                            <div class="col-lg-3"><span class="fw-semibold">Name:<p class="fw-light fs-5">${recordId.customername}</p></span></div>
                            <div class="col-lg-3"><span class="fw-semibold">Phone:<p class="fw-light fs-5">${recordId.customerphoneno}</p></span></div>
                            <div class="col-lg-3"><span class="fw-semibold">Email:<p class="fw-light fs-5">${recordId.customeremailaddress}</p></span></div>
                            <div class="col-lg-3"><span class="fw-semibold">City:<p class="fw-light fs-5">${recordId.customercity}</p></span></div>
                            <div class="col-lg-3 mt-3"><span class="fw-semibold">State:<p class="fw-light fs-5">${recordId.customerstate}</p></span></div>
                            <div class="col-lg-3 mt-3"><span class="fw-semibold">Country:<p class="fw-light fs-5">${recordId.customercountry}</p></span></div>
                            <div class="col-lg-12 p-3">
                                <span class="fw-semibold">Description: <p class="fw-light">${recordId.customeraddress}</p></span>
                            </div>
                    </div>`;

                $('#modalbody').append(columntwo);

                $('.slider').slick({
                    dots: true,
                    arrows: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1000,
                    responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });
            });
        });
    </script>
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
</x-app-layout>
