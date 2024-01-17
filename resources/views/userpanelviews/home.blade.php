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
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Information</h4>
                                                {{-- <div class="flex-shrink-0">
                                                    <div class="form-check form-switch form-switch-right form-switch-md">

                                                    </div>
                                                </div> --}}
                                            </div><!-- end card header -->
                                            <div class="card-body">
                                                <div class="live-preview">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-3 col-md-6">
                                                            <div>
                                                                <label for="placeholderInput" class="form-label">Select
                                                                    Vehicle</label>
                                                                <select name="type" class="form-select mb-3"
                                                                    aria-label="Default select example" id="subcategory">
                                                                    <option value="">select vehicle</option>
                                                                    @foreach ($vehiclesdata as $row)
                                                                        <option value="{{ $row->name }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6">
                                                            <div class="mt-4 p-1">
                                                                <button type="submit"
                                                                    class="btn btn-dark waves-effect waves-light">Vehicles List</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6">
                                                            <div class="mt-4 p-1">
                                                                <button type="submit"
                                                                    class="btn btn-info waves-effect waves-light">Book Now</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-6">
                                                            <div class="mt-4 p-1">
                                                                <button type="submit"
                                                                    class="btn btn-success waves-effect waves-light">Payment</button>
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
                // Add more options as needed
            });
        });
    </script>
@endsection
