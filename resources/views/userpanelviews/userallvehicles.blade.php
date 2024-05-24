{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
@extends('layouts.userpanel.user')
@section('content')
<style>
    .page-content{
        height: 100vh !important;
    }
</style>
    <div class="page-content">
        <div class="container-fluid h-100">
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
            {{-- <div class="row">
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
                                            @php
                                                $txt = $row->rcnumber == null ? 'RC not updated' : 'RC updated';
                                                $class =
                                                    $row->rcnumber != null
                                                        ? 'badge rounded-pill bg-success-subtle text-success fs-6'
                                                        : 'badge rounded-pill bg-danger';

                                                $Insurance =
                                                    $row->insuranceid == null
                                                        ? 'Insurance not updated'
                                                        : 'Insurance updated';
                                                $classInsurance =
                                                    $row->insuranceid != null
                                                        ? 'badge rounded-pill bg-success-subtle text-success fs-6'
                                                        : 'badge rounded-pill bg-danger';

                                                $Invoice =
                                                    $row->invoicenumber == null
                                                        ? 'Invoice not updated'
                                                        : 'Invoice updated';
                                                $classInvoice =
                                                    $row->invoicenumber != null
                                                        ? 'badge rounded-pill bg-success-subtle text-success fs-6'
                                                        : 'badge rounded-pill bg-danger';
                                            @endphp
                                            <span class="{{ $class }} p-2">{{ $txt }}</span>
                                            <span class="{{ $classInsurance }} p-2">{{ $Insurance }}</span>
                                            <span class="{{ $classInvoice }} p-2 mt-2">{{ $Invoice }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1 align-items-center">
                                        <div>
                                            <div>Number Plate Status: </div>
                                            @php
                                                $Status = '';
                                                $Statusclass = '';

                                                switch($row->numberplatestatus) {
                                                    case 'inproces':
                                                        $Status = 'In process';
                                                        $Statusclass = 'badge bg-secondary-subtle text-secondary badge-border';
                                                        break;
                                                    case 'available':
                                                        $Status = 'Available';
                                                        $Statusclass = 'badge bg-success-subtle text-success badge-border';
                                                        break;
                                                    case 'fitted':
                                                        $Status = 'Fitted';
                                                        $Statusclass = 'badge bg-info-subtle text-info badge-border';
                                                        break;
                                                    default:
                                                        $Status = 'In process';
                                                        $Statusclass = 'badge bg-warning-subtle text-warning badge-border';
                                                }
                                            @endphp
                                            <span class="{{ $Statusclass }}">{{ $Status }}</span>
                                        </div>
                                        <div>
                                          <a href="/uservehicledetailview/{{ $row->id }}"
                                                class="fs-6 btn bg-primary-subtle text-primary p-2">More
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="card tablecard h-100">
                        <div class="card-body table-responsive">
                            <table class="table table-nowrap table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">S.No</th>
                                        <th scope="col">Modal</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Frame-Number</th>
                                        <th scope="col">Engine-Number</th>
                                        <th scope="col">Doc Status</th>
                                        <th scope="col">HSRP Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buyvehiclesdata as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->vehiclemodal }}</td>
                                        <td>{{ $row->vehiclecategory }}</td>
                                        <td>{{ $row->series }}</td>
                                        <td>{{ $row->color }}</td>
                                        <td>{{ $row->frameno }}</td>
                                        <td>{{ $row->engineno }}</td>
                                        <td>
                                            @php
                                            $txt = $row->rcnumber == null ? 'RC not updated' : 'RC updated';
                                            $class = $row->rcnumber != null ? 'badge rounded-pill bg-success-subtle text-success fs-6' : 'badge rounded-pill bg-danger';

                                            $Insurance = $row->insuranceid == null ? 'Insurance not updated' : 'Insurance updated';
                                            $classInsurance = $row->insuranceid != null ? 'badge rounded-pill bg-success-subtle text-success fs-6' : 'badge rounded-pill bg-danger';

                                            $Invoice = $row->invoicenumber == null ? 'Invoice not updated' : 'Invoice updated';
                                            $classInvoice = $row->invoicenumber != null ? 'badge rounded-pill bg-success-subtle text-success fs-6' : 'badge rounded-pill bg-danger';
                                        @endphp
                                          <span class="{{ $class }} p-2">{{ $txt }}</span>
                                          <span class="{{ $classInsurance }} p-2">{{ $Insurance }}</span>
                                          <span class="{{ $classInvoice }} p-2 mt-2">{{ $Invoice }}</span>
                                        </td>
                                        <td>
                                            @php
                                            $Status = '';
                                            $Statusclass = '';

                                            switch($row->numberplatestatus) {
                                                case 'inproces':
                                                    $Status = 'In process';
                                                    $Statusclass = 'badge bg-secondary-subtle text-secondary badge-border';
                                                    break;
                                                case 'available':
                                                    $Status = 'Available';
                                                    $Statusclass = 'badge bg-success-subtle text-success badge-border';
                                                    break;
                                                case 'fitted':
                                                    $Status = 'Fitted';
                                                    $Statusclass = 'badge bg-info-subtle text-info badge-border';
                                                    break;
                                                default:
                                                    $Status = 'In process';
                                                    $Statusclass = 'badge bg-warning-subtle text-warning badge-border';
                                            }
                                        @endphp
                                        <span class="{{ $Statusclass }}">{{ $Status }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
