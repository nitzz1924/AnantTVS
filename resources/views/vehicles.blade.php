<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        @if ($message = Session::get('success'))
            <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                <strong>{{ $message }}</strong>
            </div>
        @endif
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
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text">
                                                    <span class="text-dark">Price: </span>
                                                    <strong>
                                                        <span class="text-dark p-2">{{ $row->price }}
                                                            Rs/-</span>
                                                    </strong>
                                                </p>
                                                <p class="card-text">
                                                    <a href="#" class="booking-link">
                                                        <span
                                                            class="rounded-3 bg-white text-info border border-info p-2 openModalBtn"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            data-record-id="{{ json_encode($row) }}">
                                                            Book Now
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
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
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Book your Vehicle</h1>
                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                        </div>
                        <div class="modal-body" id="modalbody">
                            {{-- Modal Body Appends Here --}}
                        </div>
                        <div class="modal-footer">
                            <a href="#"><span class="rounded-3 bg-danger text-white p-2"
                                    data-bs-dismiss="modal">Close</span></a>
                            <a href="#" onclick="leadform()"><span
                                    class="rounded-3 bg-success text-white border border-success p-2">Book Now<span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://sacredthemes.net/wheels/js/jquery.min.latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.openModalBtn').on('click', function() {
                    var recordId = $(this).data('record-id');
                    console.log(recordId);
                    $('#modalbody').empty();
                    var modal = `

                    <form action="{{ route('createlead') }}" method="POST" id="leadform">
                        @csrf
                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label fw-bold">Name</label>
                                            <input type="text" name="name" class="form-control custominput"
                                                id="exampleFormControlInput1" placeholder="enter name">
                                                <input type="hidden" name="leadid" value="{{ $row->id }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label fw-bold">Phone
                                                No.</label><span class="fw-bold text-danger">*</span>
                                            <input type="text" name="phoneno" class="form-control custominput"
                                                id="exampleFormControlInput1" placeholder="enter phone no" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label  fw-bold">Email
                                                address</label>
                                            <input type="email" name="email" class="form-control custominput"
                                                id="exampleFormControlInput1" placeholder="enter email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label  fw-bold">City</label>
                                            <input type="text" name="city" class="form-control custominput"
                                                id="exampleFormControlInput1" placeholder="enter city">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label  fw-bold">State</label>
                                            <input type="text" name="state" class="form-control custominput"
                                                id="exampleFormControlInput1" placeholder="enter state">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label  fw-bold">Country</label>
                                            <input type="text" name="country" class="form-control custominput"
                                                id="exampleFormControlInput1" placeholder="enter country">
                                        </div>
                                    </div>
                                </div>

                    </form>
                `;
                    $('#modalbody').append(modal);
                });
            });
        </script>
        <script>
            function leadform() {
                // console.log("I ma log");
                document.getElementById('leadform').submit();
            }
        </script>
    </div>
@endsection
