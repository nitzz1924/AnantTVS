{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
@extends('layouts.userpanel.user')
@push('title')
    <title>Detail Page</title>
@endpush
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Product Details</li>
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
                                                                <img src="{{ asset($img) }}" alt=""
                                                                    class="img-fluid d-block" />
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <!-- end swiper thumbnail slide -->
                                        <div class="swiper product-nav-slider mt-2">
                                            <div class="swiper-wrapper">
                                                @foreach ($buyvehiclesdata as $value)
                                                    @if ($value->image)
                                                        @php
                                                            $imagePaths = explode(',', $value->image);
                                                        @endphp
                                                        @foreach ($imagePaths as $img)
                                                            <div class="swiper-slide">
                                                                <div class="nav-slide-item">
                                                                    <img src="{{ asset($img) }}" alt=""
                                                                        class="img-fluid d-block" />
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                @foreach ($buyvehiclesdata as $value)
                                                    <h4>{{ $value->name }}</h4>
                                                @endforeach
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div><a href="#" class="text-primary d-block">Tommy
                                                            Hilfiger</a></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Seller : <span
                                                            class="text-body fw-medium">Zoetic Fashion</span>
                                                    </div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Published : <span class="text-body fw-medium">26
                                                            Mar, 2021</span>
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

                                        <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                            <div class="text-muted fs-16">
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                            </div>
                                            <div class="text-muted">( 5.50k Customer Review )</div>
                                        </div>

                                        @foreach ($buyvehiclesdata as $value)
                                            <div class="row mt-4">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    &#8377;
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Price :</p>
                                                                <h5 class="mb-0">{{ $value->price }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    <i class="ri-stack-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Available Stocks :</p>
                                                                <h5 class="mb-0">1,230</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    <i class="ri-stack-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Available Stocks :</p>
                                                                <h5 class="mb-0">1,230</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    <i class="ri-inbox-archive-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Total Revenue :</p>
                                                                <h5 class="mb-0">$60,645</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        <div class="product-content mt-5">
                                            <h5 class="fs-13 mb-3">Product Description :</h5>
                                            <nav>
                                                <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="nav-speci-tab"
                                                            data-bs-toggle="tab" href="#nav-speci" role="tab"
                                                            aria-controls="nav-speci"
                                                            aria-selected="true">Specification</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab"
                                                            href="#nav-detail" role="tab" aria-controls="nav-detail"
                                                            aria-selected="false">Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-detail-tab5" data-bs-toggle="tab"
                                                            href="#nav-document" role="tab"
                                                            aria-controls="nav-document"
                                                            aria-selected="false">Documents</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-speci" role="tabpanel"
                                                    aria-labelledby="nav-speci-tab">
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
                                                                            $Status = $value->status == null ? 'Disable' : 'Enable';
                                                                            $Statusclass = $value->status != null ? 'badge bg-success-subtle text-success badge-border ' : 'badge bg-danger-subtle text-danger badge-border';
                                                                        @endphp
                                                                        <th scope="row">Status</th>
                                                                        <td>
                                                                            <span
                                                                                class="{{ $Statusclass }}">{{ $Status }}</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Modal No.</th>
                                                                        <td>{{ $value->modelno }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="nav-detail" role="tabpanel"
                                                    aria-labelledby="nav-detail-tab">
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
                                                <div class="tab-pane fade" id="nav-document" role="tabpanel"
                                                    aria-labelledby="nav-detail-tab5">
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
                                                                                <div
                                                                                    class="d-flex justify-content-center mt-2">
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
                                                                                <div
                                                                                    class="d-flex justify-content-center mt-2">
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
                                                                                <div
                                                                                    class="d-flex justify-content-center mt-2">
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
                                        <!-- product-content -->

                                        {{-- <div class="mt-5">
                                            <div>
                                                <h5 class="fs-13 mb-3">Ratings & Reviews</h5>
                                            </div>
                                            <div class="row gy-4 gx-0">
                                                <div class="col-lg-4">
                                                    <div>
                                                        <div class="pb-3">
                                                            <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <div class="fs-16 align-middle text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-half-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <h6 class="mb-0">4.5 out of 5</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="text-muted">Total <span
                                                                        class="fw-medium">5.50k</span> reviews
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="row align-items-center g-2">
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0">5 star</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="p-2">
                                                                        <div
                                                                            class="progress animated-progress progress-sm">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar"
                                                                                style="width: 50.16%"
                                                                                aria-valuenow="50.16"
                                                                                aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0 text-muted">2758</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->

                                                            <div class="row align-items-center g-2">
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0">4 star</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="p-2">
                                                                        <div
                                                                            class="progress animated-progress progress-sm">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar"
                                                                                style="width: 19.32%"
                                                                                aria-valuenow="19.32"
                                                                                aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0 text-muted">1063</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->

                                                            <div class="row align-items-center g-2">
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0">3 star</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="p-2">
                                                                        <div
                                                                            class="progress animated-progress progress-sm">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar"
                                                                                style="width: 18.12%"
                                                                                aria-valuenow="18.12"
                                                                                aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0 text-muted">997</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->

                                                            <div class="row align-items-center g-2">
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0">2 star</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="p-2">
                                                                        <div
                                                                            class="progress animated-progress progress-sm">
                                                                            <div class="progress-bar bg-warning"
                                                                                role="progressbar"
                                                                                style="width: 7.42%"
                                                                                aria-valuenow="7.42" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0 text-muted">408</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->

                                                            <div class="row align-items-center g-2">
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0">1 star</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="p-2">
                                                                        <div
                                                                            class="progress animated-progress progress-sm">
                                                                            <div class="progress-bar bg-danger"
                                                                                role="progressbar"
                                                                                style="width: 4.98%"
                                                                                aria-valuenow="4.98" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="p-2">
                                                                        <h6 class="mb-0 text-muted">274</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-lg-8">
                                                    <div class="ps-lg-4">
                                                        <div class="d-flex flex-wrap align-items-start gap-3">
                                                            <h5 class="fs-13">Reviews: </h5>
                                                        </div>

                                                        <div class="me-lg-n3 pe-lg-4" data-simplebar
                                                            style="max-height: 225px;">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="py-2">
                                                                    <div class="border border-dashed rounded p-3">
                                                                        <div class="d-flex align-items-start mb-3">
                                                                            <div class="hstack gap-3">
                                                                                <div
                                                                                    class="badge rounded-pill bg-success mb-0">
                                                                                    <i class="mdi mdi-star"></i>
                                                                                    4.2
                                                                                </div>
                                                                                <div class="vr"></div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="text-muted mb-0">
                                                                                        Superb sweatshirt. I
                                                                                        loved it. It is for
                                                                                        winter.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="d-flex flex-grow-1 gap-2 mb-3">
                                                                            <a href="#" class="d-block">
                                                                                <img src="assets/images/small/img-12.jpg"
                                                                                    alt=""
                                                                                    class="avatar-sm rounded object-fit-cover">
                                                                            </a>
                                                                            <a href="#" class="d-block">
                                                                                <img src="assets/images/small/img-11.jpg"
                                                                                    alt=""
                                                                                    class="avatar-sm rounded object-fit-cover">
                                                                            </a>
                                                                            <a href="#" class="d-block">
                                                                                <img src="assets/images/small/img-10.jpg"
                                                                                    alt=""
                                                                                    class="avatar-sm rounded object-fit-cover">
                                                                            </a>
                                                                        </div>

                                                                        <div class="d-flex align-items-end">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-13 mb-0">Henry
                                                                                </h5>
                                                                            </div>

                                                                            <div class="flex-shrink-0">
                                                                                <p class="text-muted fs-13 mb-0">
                                                                                    12 Jul, 21</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="py-2">
                                                                    <div class="border border-dashed rounded p-3">
                                                                        <div class="d-flex align-items-start mb-3">
                                                                            <div class="hstack gap-3">
                                                                                <div
                                                                                    class="badge rounded-pill bg-success mb-0">
                                                                                    <i class="mdi mdi-star"></i>
                                                                                    4.0
                                                                                </div>
                                                                                <div class="vr"></div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="text-muted mb-0">
                                                                                        Great at this price,
                                                                                        Product quality and look
                                                                                        is awesome.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-end">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-13 mb-0">Nancy
                                                                                </h5>
                                                                            </div>

                                                                            <div class="flex-shrink-0">
                                                                                <p class="text-muted fs-13 mb-0">
                                                                                    06 Jul, 21</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="py-2">
                                                                    <div class="border border-dashed rounded p-3">
                                                                        <div class="d-flex align-items-start mb-3">
                                                                            <div class="hstack gap-3">
                                                                                <div
                                                                                    class="badge rounded-pill bg-success mb-0">
                                                                                    <i class="mdi mdi-star"></i>
                                                                                    4.2
                                                                                </div>
                                                                                <div class="vr"></div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="text-muted mb-0">
                                                                                        Good product. I am so
                                                                                        happy.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-end">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-13 mb-0">Joseph
                                                                                </h5>
                                                                            </div>

                                                                            <div class="flex-shrink-0">
                                                                                <p class="text-muted fs-13 mb-0">
                                                                                    06 Jul, 21</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="py-2">
                                                                    <div class="border border-dashed rounded p-3">
                                                                        <div class="d-flex align-items-start mb-3">
                                                                            <div class="hstack gap-3">
                                                                                <div
                                                                                    class="badge rounded-pill bg-success mb-0">
                                                                                    <i class="mdi mdi-star"></i>
                                                                                    4.1
                                                                                </div>
                                                                                <div class="vr"></div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="text-muted mb-0">
                                                                                        Nice Product, Good
                                                                                        Quality.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-end">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-13 mb-0">Jimmy
                                                                                </h5>
                                                                            </div>

                                                                            <div class="flex-shrink-0">
                                                                                <p class="text-muted fs-13 mb-0">
                                                                                    24 Jun, 21</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end Ratings & Reviews -->
                                        </div> --}}
                                        <!-- end card body -->
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
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
