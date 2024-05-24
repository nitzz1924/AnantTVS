{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
@extends('layouts.userpanel.user')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
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

            {{-- <div class="row">
                @foreach ($allvehicles as $row)
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card rounded border border-1 openModalBtn" id="openModalBtnone"
                                data-bs-toggle="modal" data-bs-target="#myModal" data-record-id="{{ json_encode($row) }}">
                                <div class="card-body">
                                    <div class="live-preview row">
                                        <div class="col-lg-3">
                                            <div class="d-flex position-relative">
                                                @if ($row->image)
                                                    @php
                                                        $imagePaths = explode(',', $row->image);
                                                        $firstImagePath = $imagePaths[0];
                                                    @endphp
                                                    <img class="flex-shrink-0 me-3 avatar-xl rounded border border-1 p-2"
                                                        src="{{ asset($firstImagePath) }}" alt="Thumbnail" width="200px">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Name: <strong>{{ $row->name }}</strong></li>
                                                <li class="list-group-item">Type: <strong>{{ $row->type }}</strong></li>
                                                <li class="list-group-item">Price: <strong>{{ $row->price }}</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div> --}}

            <div class="row">
                @foreach ($allvehicles as $row)
                    <div class="col-xxl-3 col-lg-4 col-md-6 product-item upto-15 ">
                        <div class="card explore-box card-animate">
                            <div class="position-relative rounded overflow-hidden">
                                @if ($row->image)
                                    @php
                                        $imagePaths = explode(',', $row->image);
                                        $firstImagePath = $imagePaths[0];
                                    @endphp
                                    <img src="{{ asset($firstImagePath) }}" alt="" class="card-img-top explore-img">
                                @endif
                                <div class="discount-time openModalBtn" id="openModalBtnone" data-bs-toggle="modal"
                                    data-bs-target="#myModal" data-record-id="{{ json_encode($row) }}">
                                    <a href="#">
                                        <h5 id="auction-time-1" class="mb-0 text-dark">View Details</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i>
                                    {{ $row->type }} </p>
                                <p class="text-success">Ex-showroom</p>
                                <h5 class="text-success"><i class="bi bi-currency-rupee"></i>{{ $row->price }} </h5>
                                <h6 class="fs-16 mb-3"><a href="apps-nft-item-details.html"
                                        class="text-body">{{ $row->name }}</a></h6>

                                {{-- <a href="#" class="booking-link" id="modalunique{{ $row->id }}">
                                    <span class="rounded-3 bg-white text-info border border-info p-2 openModalBtnnew"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-record-id="{{ json_encode($row) }}">
                                        Book Now
                                    </span>
                                </a> --}}
                                <div class="text-end">
                                    <a href="#" class="booking-link" id="modalunique{{ $row->id }}">
                                        <span class="rounded-3 bg-white text-info border border-info p-2 openModalBtnnew"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            data-record-id="{{ json_encode($row) }}">
                                            Book Now
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-end">
                    {{ $allvehicles->links('pagination::bootstrap-4') }} <!--Pagination-->
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
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{ route('createlead') }}" method="POST" id="leadform">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Book your Vehicle</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalbodynew">
                        {{-- Modal Body Appends Here --}}
                    </div>
                    <div class="modal-footer">
                        <button class="rounded-3 bg-success text-white border btn-sm border-success p-2" type="submit">Book Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                    // Checkbox is checked, set text to "Enabled"
                    labelElement.text('Enabled');
                    switchElement.removeClass('form-switch-danger').addClass('form-switch-success');
                } else {
                    // Checkbox is unchecked, set text to "Disabled"
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
            $('.openModalBtnnew').on('click', function() {
                var recordId = $(this).data('record-id');
                console.log(recordId);
                $('#modalbodynew').empty();
                var modal = `

            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control custominput"
                                            id="exampleFormControlInput1" placeholder="enter name" value="{{ $user->customername }}">
                                            <input type="hidden" name="leadid" value="{{ $row->id }}">
                                            <input type="hidden" name="vehiclename" value="${recordId.name}">
                                            <input type="hidden" name="customerstatus" value="Existing">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Phone
                                            No.</label><span class="fw-bold text-danger">*</span>
                                        <input type="text" name="phoneno" class="form-control custominput"
                                            id="exampleFormControlInput1" placeholder="enter phone no" value="{{ $user->customerphoneno }}" required>
                                    </div>
                                </div>
                            </div>
            `;
                $('#modalbodynew').append(modal);
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/=" crossorigin="anonymous"></script>
@endsection
