{{-- -----------------------------------------------🙏JAI SHREE
RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }
    </style>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Anant TVS</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">All Vehicles</a></li>
                                    <li class="breadcrumb-item active">All Vehicles</li>
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
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">All Vehicles</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                        <a href="{{ route('viewaddvehicle') }}"><button type="button"
                                                class="btn btn-secondary waves-effect waves-light">Go
                                                Back</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <table id="example" class="table table-nowrap table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Model No</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Status</th>
                                            <th colspan="1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allvehicles as $index => $row)
                                        <tr>
                                            <th scope="row" class="fw-semibold">{{ $index + 1 }}</th>
                                            <td>
                                                @if ($row->bannerimage)
                                                {{-- @php
                                                $imagePaths = explode(',', $row->image);
                                                $firstImagePath = $imagePaths[0];
                                                @endphp --}}
                                                <img src="{{asset(" uploads/vehicle/".$row->bannerimage) }}"
                                                alt="Thumbnail"
                                                width="100px">
                                                @endif
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->type }}</td>
                                            <td>{{ $row->modelno }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td>{{ $row->color }}</td>
                                            <td>
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox"
                                                        data-id='{{ $row->id }}' role="switch"
                                                        id="toggle-{{ $row->id }}" {{ $row->status == '1' ? 'checked' :
                                                    null }}>
                                                    <label class="form-check-label" for="toggle-{{ $row->id }}">{{
                                                        $row->status == '1' ? 'Enabled' : 'disabled' }}</label>
                                                </div>
                                            </td>
                                            {{-- <td>
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="text" data-id='{{ $row->id }}'
                                                        role="switch" id="" {{ $row->numberplatestatus == '1' ?
                                                    'checked' : null }}>
                                                    <label class="form-check-label" for="toggle-{{ $row->id }}">{{
                                                        $row->status == '1' ? 'Enabled' : 'disabled' }}</label>
                                                </div>
                                            </td> --}}
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="" data-bs-target="#myModal"
                                                                data-record-id="{{ json_encode($row) }}"
                                                                id="openModalBtnone" data-bs-toggle="modal"
                                                                class="dropdown-item openModalBtn"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"
                                                                href="/editvehicle/{{ $row->id }}"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit</a></li>
                                                        {{-- <li>
                                                            <a href="/viewuservehicles/{{$row->id}}"
                                                                class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-car-fill align-bottom me-2 text-muted"></i>All
                                                                Vehicles
                                                            </a>
                                                        </li> --}}
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
                                    {{ $allvehicles->links('pagination::bootstrap-4') }}
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
                        <h4 class="modal-title" id="modal-heading">Vehicle Details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body" id="modalbody">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            @foreach ($allvehicles as $row)
                document.getElementById("sa-warning{{ $row->id }}").addEventListener("click", function() {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to delete this Vehicle..?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                        cancelButtonClass: "btn btn-danger w-xs mt-2",
                        confirmButtonText: '<a href="/deleteparticularvehicle/{{ $row->id }}" class="text-white">Yes, delete it!</a>',
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                });
            @endforeach
        });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
            $('[id^="toggle-"]').change(function() {
                var switchElement = $(this).closest('.form-switch');
                var labelElement = switchElement.find('.form-check-label');
                var status = $(this).prop('checked') ? 1 : 0; // setting status
                var dataId = $(this).data('id'); // data actual ID

                //Updating Status
                $.ajax({
                    url: '/updatestatus',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: dataId, // dynamically getting data id
                        status: status
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });

                if ($(this).prop('checked')) {
                    labelElement.text('Enabled');
                    switchElement.removeClass('form-switch-danger').addClass('form-switch-success');
                } else {
                    labelElement.text('Disabled');
                    switchElement.removeClass('form-switch-success').addClass('form-switch-danger');
                }
            });
        });
        </script>
        <script>
            $(document).ready(function() {
            $('.openModalBtn').on('click', function() {
                var recordId = $(this).data('record-id');
                console.log(recordId);
                $('#modalbody').empty();

                var columntwo = `
            <div class="row p-3">
                <div class="col-lg-6">
                    <div class="slider">`;

                if (recordId.image) {
                    var imagePaths = recordId.image.split(',');
                    for (var i = 0; i < imagePaths.length; i++) {
                        columntwo += '<img src="' + imagePaths[i] +
                            '" alt="Thumbnail" class="sliderimages" width="150px">';
                    }
                }

                columntwo += `
                            </div>
                        </div>
                        <div class="col-lg-6 row">
                            <div class="col-md-4"><span class="fw-bold">Name: <h5 class="fw-light">${recordId.name}</h5></span></div>
                            <div class="col-md-4"><span class="fw-bold">Price: <h5 class="fw-light">${recordId.price} &nbsp;/-Rs</h5></span></div>
                            <div class="col-md-4"><span class="fw-bold">Type: <h5 class="fw-light">${recordId.type}</h5></span></div>
                            <div class="col-md-4"><span class="fw-bold">Modal Number: <h5 class="fw-light">${recordId.modelno}</h5></span></div>
                            <div class="col-md-4"><span class="fw-bold">Color: <h5 class="fw-light">${recordId.color}</h5></span></div>
                            <div class="col-md-4"><span class="fw-bold">Status: <h5 class="fw-light">${recordId.status}</h5></span></div>
                            <div class="col-lg-12 p-3">
                                <span class="fw-bold">Description: <p class="fw-light">${recordId.discription}</p></span>
                            </div>
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
