{{-- -----------------------------------------------🙏JAI SHREE
RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Anant TVS</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Anant TVS</a></li>
                                <li class="breadcrumb-item active">Vehicle Detail</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                            <div class="swiper-wrapper">
                                                @foreach ($buyvehiclesdata as $value)
                                                @if ($value->image)
                                                @php
                                                $imagePaths = explode(',', $value->image);
                                                @endphp
                                                @foreach ($imagePaths as $img)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset($img) }}" alt="" class="img-fluid d-block" />
                                                </div>
                                                @endforeach
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                @foreach ($buyvehiclesdata as $value)
                                                <h4>{{ $value->name }}(&#8377; {{ $value->price }})</h4>
                                                @endforeach
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div><a href="#" class="text-primary d-block">{{ $value->name }}</a>
                                                    </div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Seller : Anant TVS</div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Published : <span
                                                            class="text-body fw-medium">{{ $value->created_at->format('j F Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <a href="/editbuyvehicle/{{ $value->id }}" class="btn btn-light"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Re-Upload Documents"><i
                                                            class="ri-pencil-fill align-bottom"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($buyvehiclesdata as $value)
                                        <div class="row mt-4">
                                            <!-- end col -->
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="">
                                                    <div class="flex-grow-1">
                                                        <p class="text-success mb-1">Set HSRP Status</p>
                                                        <select name="statustype" class="form-select mb-3"
                                                            aria-label="Default select example" id="numberplatestatus">
                                                            <option value="">Choose....</option>
                                                            <option value="inproces" {{$value->numberplatestatus == 'inproces' ? 'selected' :
                                                                ''}}>In Process</option>
                                                            <option value="available"{{$value->numberplatestatus == 'available' ? 'selected' :
                                                                ''}}>Available</option>
                                                            <option value="fitted" {{$value->numberplatestatus == 'fitted' ? 'selected' :
                                                                ''}}>Fitted</option>
                                                        </select>
                                                        <input type="hidden" name="recordid"
                                                            value="{{ $value->buyvehicleid }}" id="recordid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="mt-4">
                                            <h4 class="text-black-fw-bold">Specifications</h4>
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        @foreach ($buyvehiclesdata as $value)
                                                        <tr>
                                                            <th scope="row" style="width: 200px;">
                                                                Type</th>
                                                            <td>{{ $value->type }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Color</th>
                                                            <td>{{ $value->color }}</td>
                                                        </tr>
                                                        <tr>
                                                            @php
                                                            $Status = $value->status == null ? 'Disable' :
                                                            'Enable';
                                                            $Statusclass = $value->status != null ? 'badge
                                                            bg-success-subtle text-success badge-border ' :
                                                            'badge bg-danger-subtle text-danger badge-border';
                                                            @endphp
                                                            <th scope="row">Status</th>
                                                            <td>
                                                                <span class="{{ $Statusclass }}">{{ $Status}}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Modal No.</th>
                                                            <td>{{ $value->modelno }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">HSRP Status</th>
                                                            <td>{{$value->numberplatestatus}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <h4 class="text-black-fw-bold">Discription</h4>
                                            <div class="mt-2">
                                                @foreach ($buyvehiclesdata as $value)
                                                <div>
                                                    <h5 class="mb-3">
                                                        {{ $value->name }}({{ $value->color }})</h5>
                                                    <p>{{ $value->discription }}</p>
                                                    <div>
                                                        <p class="mb-2"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i><strong>
                                                                Chassis Number
                                                                :&nbsp;</strong>{{ $value->chassisnumber }}</p>
                                                        <p class="mb-2"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            <strong> RC Number
                                                                :&nbsp;</strong>{{ $value->rcnumber }}
                                                        </p>
                                                        <p class="mb-2"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            <strong> Insurance ID
                                                                :&nbsp;</strong>{{ $value->insuranceid }}
                                                        </p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>

            <div class="row">
                <div class="card">
                    <div class="mt-4">
                        <h4 class="text-black-fw-bold mb-3">Download Vehicle Documents</h4>
                        @foreach ($buyvehiclesdata as $value)
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card border border-1">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 text-center">RC
                                            Document</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    {{ $value->rcimage }}</h5>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <a href="{{ asset('uploads/' . $value->rcimage) }}"
                                                        class="btn btn-soft-success waves-effect waves-light btn-sm"
                                                        download="RC">Download</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-lg-4">
                                <div class="card border border-1">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 text-center">Invoice
                                            Document</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    {{ $value->invoiceimage }}</h5>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <a href="{{ asset('uploads/' . $value->invoiceimage) }}"
                                                        class="btn btn-soft-success waves-effect waves-light btn-sm"
                                                        download="Invoice">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-lg-4">
                                <div class="card border border-1">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 text-center">
                                            Insurance Document</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    {{ $value->insuranceimage }}</h5>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <a href="{{ asset('uploads/' . $value->insuranceimage) }}"
                                                        class="btn btn-soft-success waves-effect waves-light btn-sm"
                                                        download="Insurance">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#numberplatestatus').change(function() {
                var selectedStatus = $(this).val();
                var recordId = $('#recordid').val();
                console.log(recordId);
                console.log(selectedStatus);

                //Updating Status
                $.ajax({
                    url: '/updatenumberplatestatus',
                    method: 'POST',
                    data: {
                        status: selectedStatus,
                        record_id: recordId
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

</x-app-layout>
