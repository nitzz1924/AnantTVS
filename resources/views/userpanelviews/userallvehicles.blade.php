{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
@extends('layouts.userpanel.user')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Anant TVS</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">My Vehicles</a></li>
                                <li class="breadcrumb-item active">My Vehicles</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($buyvehiclesdata as $row)
                    <div class="col-lg-4">
                        <div class="card rounded border border-1">
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="d-flex position-relative">
                                        @php
                                            $imagePaths = explode(',', $row->vehicleImage);
                                            // dd($imagePaths);
                                            $firstImagePath = $imagePaths[0];
                                        @endphp
                                        <img src="{{ asset($firstImagePath) }}"
                                            class="flex-shrink-0 me-3 avatar-xl rounded border border-1 p-2"
                                            alt="..." />
                                        <div class="">
                                            <h5 class="mt-0">{{ $row->vehicleName }}</h5>
                                            <p>{{ $cutString = substr($row->vehicleDis, 0, 50) }}</p>
                                            <a href="/uservehicledetailview/{{ $row->id }}"
                                                class="fs-6 badge rounded-pill bg-primary-subtle text-primary p-2">More
                                                Details</a>&nbsp;
                                            @php
                                                $txt = $row->rcnumber == null ? 'RC not available' : 'RC available';
                                                $class = $row->rcnumber != null ? 'badge rounded-pill bg-success' : 'badge rounded-pill bg-danger';

                                                $Insurance = $row->insuranceid == null ? 'Insurance not available' : 'Insurance available';
                                                $classInsurance = $row->insuranceid != null ? 'badge rounded-pill bg-success' : 'badge rounded-pill bg-danger';

                                                $Invoice = $row->invoicenumber == null ? 'Invoice not available' : 'Invoice available';
                                                $classInvoice = $row->invoicenumber != null ? 'badge rounded-pill bg-success' : 'badge rounded-pill bg-danger';
                                            @endphp
                                            &nbsp;<span class="{{ $class }} p-2">{{ $txt }}</span>
                                            &nbsp;<span class="{{ $classInsurance }} p-2">{{ $Insurance }}</span><br>
                                            &nbsp;<span class="{{ $classInvoice }} p-2 mt-2">{{ $Invoice }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        // setTimeout(function() {
        //     $('#successAlert').fadeOut('slow');
        // }, 2000);

        // setTimeout(function() {
        //     $('#dangerAlert').fadeOut('slow');
        // }, 2000);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
