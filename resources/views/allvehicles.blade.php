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
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">All Vehicles</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{ route('viewaddcustomer') }}"><button type="button"
                                            class="btn btn-secondary waves-effect waves-light">Go
                                            Back</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-nowrap table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Model No</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Color</th>
                                        {{-- <th scope="col">Discription</th> --}}
                                        <th scope="col">Status</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allvehicles as $row)
                                        <tr>
                                            <th scope="row" class="fw-semibold">{{ $row->id }}</th>
                                            <td>
                                                @if ($row->image)
                                                    @php
                                                        $imagePaths = explode(',', $row->image);
                                                        $firstImagePath = $imagePaths[0];
                                                    @endphp
                                                    <img src="{{ asset($firstImagePath) }}" alt="Thumbnail"
                                                        width="100px">
                                                    {{-- {{ basename($firstImagePath) }} --}}
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
                                                        id="toggle-{{ $row->id }}"
                                                        {{ $row->status == '1' ? 'checked' : null }}>
                                                    <label class="form-check-label"
                                                        for="toggle-{{ $row->id }}">{{ $row->status == '1' ? 'Enabled' : 'disabled' }}</label>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-primary openModalBtn"
                                                    id="openModalBtnone" data-bs-toggle="modal"
                                                    data-bs-target="#myModal"
                                                    data-record-id="{{ json_encode($row) }}">View</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {{ $allvehicles->links('pagination::bootstrap-4') }} <!--Pagination-->
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
                    <h4 class="modal-title" id="modal-heading">Vehicle Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body" id="modalbody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary ">Save Changes</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/=" crossorigin="anonymous"></script>
</x-app-layout>
