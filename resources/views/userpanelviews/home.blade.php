{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
@extends('layouts.userpanel.user')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-6">
                                <div class="">
                                    <div class="slider"> {{-- This div is creating slider don't remove the class slider from here --}}
                                        @foreach ($sliderimages as $vehicle)
                                            @if ($vehicle->images)
                                                @php
                                                    $imagePaths = explode(',', $vehicle->images);
                                                @endphp
                                                @foreach ($imagePaths as $img)
                                                    <div class="">
                                                        <img class="img-fluid sliderimages" src="{{ URL::to($img) }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            @else
                                                <div>
                                                    <img class="img-fluid" src="#" alt="Default Image">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- <div class="card">
                                            <div class="card-header">
                                                <div class="live-preview">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-10 col-md-6">
                                                            <div>
                                                                <label for="placeholderInput" class="form-label">Select
                                                                    Vehicle</label>
                                                                <select name="type" class="form-select mb-2"
                                                                    aria-label="Default select example" id="subcategory">
                                                                    <option value="">select vehicle</option>
                                                                    @foreach ($vehiclesdata as $row)
                                                                        <option value="{{ $row->name }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-2 col-md-6">
                                                            <div class="mt-4 p-1">
                                                                <button type="submit"
                                                                    class="btn btn-success waves-effect waves-light">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row justify-content-md-center">
                                                    <div class="col-xxl-3 col-6">
                                                        <div class="text-center mt-2">
                                                            <a href="{{ route('alluservehiclesview') }}"><img
                                                                    class="img-thumbnail rounded-circle avatar-xl"
                                                                    alt="200x200"
                                                                    src="{{ asset('website-assets/images/raiderblue.webp') }}"></a>
                                                            <a href="{{ route('alluservehiclesview') }}"
                                                                class=" text-black waves-effect waves-light mt-2"><i
                                                                    class="bi bi-car-front-fill"></i>&nbsp;My Vehicles</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-6">
                                                        <div class="text-center mt-2">
                                                            <a href="/viewuserprofile/{{ $user->id }}"><img
                                                                    class="img-thumbnail rounded-circle avatar-xl"
                                                                    alt="200x200"
                                                                    src="{{ asset('website-assets/images/profile.png') }}"></a>
                                                            <a href="/viewuserprofile/{{ $user->id }}"
                                                                class=" text-black waves-effect waves-light mt-2"><i
                                                                    class="bi bi-person-fill"></i>&nbsp;Profile</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-6">
                                                        <div class="text-center mt-2">
                                                            <a href="{{ route('allvehicleslist') }}"><img
                                                                    class="img-thumbnail rounded-circle avatar-xl"
                                                                    alt="200x200"
                                                                    src="{{ asset('website-assets/images/all.png') }}"></a>
                                                            <a href="{{ route('allvehicleslist') }}"
                                                                class=" text-black waves-effect waves-light mt-2"><i
                                                                    class="bi bi-car-front-fill"></i>&nbsp;All Vehicles</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-6">
                                                        <div class="text-center mt-2">
                                                            <a href="{{ route('paymentpage') }}"><img
                                                                    class="img-thumbnail rounded-circle avatar-xl"
                                                                    alt="200x200"src="{{ asset('website-assets/images/payment.png') }}"></a>
                                                            <a href="{{ route('paymentpage') }}"
                                                                class=" text-black waves-effect waves-light mt-2"><i
                                                                    class="bi bi-currency-rupee"></i>&nbsp;Make Payment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Vehicles</h5>
                                                <!-- Swiper -->
                                                <div class="swiper project-swiper mt-n4">
                                                    <div class="d-flex justify-content-end gap-2 mb-2">
                                                        <div class="slider-button-prev">
                                                            <div class="avatar-title fs-18 rounded px-1">
                                                                <i class="ri-arrow-left-s-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="slider-button-next">
                                                            <div class="avatar-title fs-18 rounded px-1">
                                                                <i class="ri-arrow-right-s-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div
                                                                class="card profile-project-card shadow-none profile-project-success mb-0">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate mb-1">
                                                                                <a href="#" class="text-body">ABC
                                                                                    Project Customization</a>
                                                                            </h5>
                                                                            <p class="text-muted text-truncate mb-0">
                                                                                Last Update : <span
                                                                                    class="fw-semibold text-body">4
                                                                                    hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div
                                                                                class="badge bg-warning-subtle text-warning fs-10">
                                                                                Inprogress</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">
                                                                                        Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                                A
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end slide item -->
                                                        <div class="swiper-slide">
                                                            <div
                                                                class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate mb-1">
                                                                                <a href="#" class="text-body">Client
                                                                                    -
                                                                                    John</a>
                                                                            </h5>
                                                                            <p class="text-muted text-truncate mb-0">
                                                                                Last Update : <span
                                                                                    class="fw-semibold text-body">1
                                                                                    hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div
                                                                                class="badge bg-success-subtle text-success fs-10">
                                                                                Completed</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">
                                                                                        Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                                C
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card body -->
                                                            </div><!-- end card -->
                                                        </div><!-- end slide item -->
                                                        <div class="swiper-slide">
                                                            <div
                                                                class="card profile-project-card shadow-none profile-project-info mb-0">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate mb-1">
                                                                                <a href="#" class="text-body">Brand
                                                                                    logo
                                                                                    Design</a>
                                                                            </h5>
                                                                            <p class="text-muted text-truncate mb-0">
                                                                                Last Update : <span
                                                                                    class="fw-semibold text-body">2
                                                                                    hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div
                                                                                class="badge bg-warning-subtle text-warning fs-10">
                                                                                Inprogress</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">
                                                                                        Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card body -->
                                                            </div><!-- end card -->
                                                        </div><!-- end slide item -->
                                                        <div class="swiper-slide">
                                                            <div
                                                                class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate mb-1">
                                                                                <a href="#"
                                                                                    class="text-body">Project
                                                                                    update</a>
                                                                            </h5>
                                                                            <p class="text-muted text-truncate mb-0">
                                                                                Last Update : <span
                                                                                    class="fw-semibold text-body">4
                                                                                    hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div
                                                                                class="badge bg-success-subtle text-success fs-10">
                                                                                Completed</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">
                                                                                        Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!-- end slide item -->
                                                        <div class="swiper-slide">
                                                            <div
                                                                class="card profile-project-card shadow-none profile-project-warning mb-0">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate mb-1">
                                                                                <a href="#" class="text-body">Chat
                                                                                    App</a>
                                                                            </h5>
                                                                            <p class="text-muted text-truncate mb-0">
                                                                                Last Update : <span
                                                                                    class="fw-semibold text-body">1
                                                                                    hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div
                                                                                class="badge bg-warning-subtle text-warning fs-10">
                                                                                Inprogress</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">
                                                                                        Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                                alt=""
                                                                                                class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <div class="avatar-xs">
                                                                                            <div
                                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                                A
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!-- end slide item -->
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Initialize Slick Slider
        $(document).ready(function() {
            $('.slider').slick({
                // Slick Slider configuration options
                dots: true,
                autoplay: true,
                // Add more options as needed
            });
        });
    </script>
@endsection
