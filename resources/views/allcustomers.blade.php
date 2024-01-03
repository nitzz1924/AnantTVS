{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
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
                                    {{-- <a href="{{ route('createcustomer') }}"><button type="button"class="btn btn-secondary waves-effect waves-light">Go Back</button></a> --}}
                                    <a href="{{ route('viewaddcustomer') }}"><button
                                            type="button"class="btn btn-success waves-effect waves-light">Add New
                                            Customer</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-nowrap table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile No.</th>
                                        <th scope="col">E-Mail</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Address</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allcustomers as $row)
                                        <tr>
                                            <th scope="row" class="fw-semibold">{{ $row->id }}</th>
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
                                                    <button class="btn btn-soft-secondary btn-sm dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#" data-bs-target="#myModal"
                                                                data-record-id="{{ json_encode($row) }}"
                                                                id="openModalBtnone" data-bs-toggle="modal"
                                                                class="dropdown-item openModalBtn"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn" href="/editcustomer/{{$row->id}}"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit</a></li>
                                                        <li>
                                                            <a href="/viewuservehicles/{{$row->id}}" class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-car-fill align-bottom me-2 text-muted"></i>All
                                                                Vehicles
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {{ $allcustomers->links('pagination::bootstrap-4') }} <!--Pagination-->
                            </div>
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

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->

    </div><!-- /.modal -->
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
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/
                                        =" crossorigin="anonymous"></script>
</x-app-layout>
