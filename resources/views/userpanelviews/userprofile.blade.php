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
                                <div class="bg-white">
                                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                                        <div class="row g-4">
                                            <div class="col-auto">
                                                <div class="avatar-lg ms-2">
                                                    <img src="{{ asset('website-assets/images/profile.png') }}" alt="user-img"
                                                        class="img-thumbnail rounded-circle" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col">
                                                <div class="p-2">
                                                    @foreach ($allcustomers as $row)
                                                    <h3 class="text-dark mb-1">{{$row->customername}}</h3>
                                                    <div class="hstack text-dark-50 gap-1">
                                                        <div class="me-2"><i
                                                                class="ri-phone-fill me-1 text-dark text-opacity-75 fs-16 align-middle"></i>+(91) {{$row->customerphoneno}}</div>
                                                        <div><i
                                                                class="ri-mail-line me-1 text-dark text-opacity-75 fs-16 align-middle"></i>{{$row->customeremailaddress}}
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row justify-content-md-center">
                                                    <div class="">
                                                        <div class="">
                                                            <h5 class="card-title mb-3">Info</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    @foreach ($allcustomers as $row)
                                                                        <tbody>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Mobile :
                                                                                </th>
                                                                                <td class="text-muted">+(91) {{$row->customerphoneno}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">E-mail :
                                                                                </th>
                                                                                <td class="text-muted">{{$row->customeremailaddress}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">City
                                                                                </th>
                                                                                <td class="text-muted">{{$row->customercity}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">State :
                                                                                </th>
                                                                                <td class="text-muted">{{$row->customerstate}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Country :
                                                                                </th>
                                                                                <td class="text-muted">{{$row->customercountry}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Address :
                                                                                </th>
                                                                                <td class="text-muted">{{$row->customeraddress}}
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    @endforeach
                                                                </table>
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
    {{-- <script>
        // Initialize Slick Slider
        $(document).ready(function() {
            $('.slider').slick({
                // Slick Slider configuration options
                dots: true,
                autoplay: true,
                // Add more options as needed
            });
        });
    </script> --}}
@endsection
