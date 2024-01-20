{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
@extends('layouts.userpanel.user')
@push('title')
    <title>Make Payment</title>
@endpush
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
                                            <div class="card-header">
                                                <div class="row justify-content-md-center">
                                                    <div class="col-lg-6">
                                                        <div class="live-preview">
                                                            <div class="d-grid gap-2">
                                                                <h5 class="card-title text-center">Payment Modes</h5>
                                                                @foreach ($masterdata as $buttons)
                                                                    <button class="btn btn-outline-primary"
                                                                        type="button">{{ $buttons->label }}</button>
                                                                @endforeach
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
                autoplay: true,
                // Add more options as needed
            });
        });
    </script>
@endsection
