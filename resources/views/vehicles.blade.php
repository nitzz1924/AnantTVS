<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <!--* About Section Start -->
        <section id="about" class="about-section mb-5 mt-5">
            <div class="container">
                <div class="row align-items-center bicycle-img wow">
                    <div class="heading-wrapper">
                        <h2 class="large-heading text-uppercase"><span>All Vehicles</span></h2>
                    </div>
                    @foreach ($allvehicles->chunk(4) as $vehicleChunk)
                        <div class="row">
                            @foreach ($vehicleChunk as $row)
                                <div class="col-lg-3">
                                    <div class="card cardcustomup mt-3">
                                        @php
                                            $imagePaths = explode(',', $row->image);
                                            $firstImagePath = $imagePaths[0];
                                        @endphp
                                        <img src="{{ asset($firstImagePath) }}" alt="" class="img-fluid">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $row->name }}</h5>
                                            <p class="card-text">{{ substr($row->discription, 0, 50) }}</p>
                                            <p class="card-text">
                                                <strong>
                                                    <span class="text-dark">Price: </span>
                                                    <span
                                                        class="badge rounded-pill bg-danger text-white p-2">{{ $row->price }}
                                                        Rs/-</span>
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="pagination mt-5 p-3 justify-content-center">
                    {{ $allvehicles->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>
        <script src="https://sacredthemes.net/wheels/js/jquery.min.latest.js"></script>
    </div>
@endsection
