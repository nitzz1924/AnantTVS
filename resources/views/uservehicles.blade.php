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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">My Vehicles</a></li>
                                <li class="breadcrumb-item active">My Vehicles</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card tablecard">
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
                                        <th scope="col">Action</th>
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
                                            $class =
                                            $row->rcnumber != null
                                            ? 'badge rounded-pill bg-success-subtle
                                            text-success fs-6'
                                            : 'badge rounded-pill bg-danger';

                                            $Insurance =
                                            $row->insuranceid == null
                                            ? 'Insurance not updated'
                                            : 'Insurance updated';
                                            $classInsurance =
                                            $row->insuranceid != null
                                            ? 'badge rounded-pill
                                            bg-success-subtle text-success fs-6'
                                            : 'badge rounded-pill bg-danger';

                                            $Invoice =
                                            $row->invoicenumber == null
                                            ? 'Invoice not updated'
                                            : 'Invoice
                                            updated';
                                            $classInvoice =
                                            $row->invoicenumber != null
                                            ? 'badge rounded-pill
                                            bg-success-subtle text-success fs-6'
                                            : 'badge rounded-pill bg-danger';
                                            @endphp
                                            <span class="{{ $class }} p-2">{{ $txt }}</span>
                                            <span class="{{ $classInsurance }} p-2">{{ $Insurance }}</span>
                                            <span class="{{ $classInvoice }} p-2 mt-2">{{ $Invoice }}</span>
                                        </td>
                                        <td>
                                            @php
                                            $Status = '';
                                            $Statusclass = '';

                                            switch ($row->numberplatestatus) {
                                            case 'inproces':
                                            $Status = 'In process';
                                            $Statusclass =
                                            'badge bg-secondary-subtle text-secondary badge-border';
                                            break;
                                            case 'available':
                                            $Status = 'Available';
                                            $Statusclass =
                                            'badge bg-success-subtle text-success badge-border';
                                            break;
                                            case 'fitted':
                                            $Status = 'Fitted';
                                            $Statusclass =
                                            'badge bg-info-subtle text-info badge-border';
                                            break;
                                            default:
                                            $Status = 'In process';
                                            $Statusclass =
                                            'badge bg-warning-subtle text-warning badge-border';
                                            }
                                            @endphp
                                            <span class="{{ $Statusclass }}">{{ $Status }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#" data-bs-target="#myModal" data-record-id="{{ json_encode($row) }}" id="openModalBtnone" data-bs-toggle="modal" class="dropdown-item viemorebtn"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn" href="/editbuyvehicle/{{ $row->id }}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Upload Documents</a></li>
                                                    <li><a class="dropdown-item edit-item-btn" href="/returnvehicle/{{ $row->id }}"><i class="ri-arrow-go-back-line align-bottom me-2 text-muted"></i>
                                                            Return This Vehicle</a></li>
                                                </ul>
                                            </div>
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
    <div id="myModal" class="modal zoomIn" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-heading">Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body" id="modalbody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var buyVehiclesData = @json($buyvehiclesdata);

    </script>

    <script>
        function getFileDisplayHTML(filename, type) {
            let fileExtension = filename ? filename.split('.').pop().toLowerCase() : '';
            let fileDisplayHTML = '';
            console.log(filename);
            if (filename) {
                if (['jpg', 'jpeg', 'png', 'gif', 'bmp'].includes(fileExtension)) {
                    fileDisplayHTML = `<img src="/uploads/${filename}" alt="${type} Thumbnail" class="" height="250px">`;
                } else if (fileExtension === 'pdf') {
                    fileDisplayHTML = `<embed src="/uploads/${filename}" type="application/pdf" width="100%" height="250px" />`;
                }
                message = "Download";
                stylemsg = " btn-soft-success ";
            } else {
                if (['jpg', 'jpeg', 'png', 'gif', 'bmp'].includes(fileExtension)) {
                    fileDisplayHTML = `<img src="/uploads/${filename}" alt="${type} Thumbnail" class="" height="250px">`;
                } else if (fileExtension === 'pdf') {
                    fileDisplayHTML = `<embed src="/uploads/${filename}" type="application/pdf" width="100%" height="250px" />`;
                }
                message = "Not Available yet";
                stylemsg = " btn-soft-danger ";
            }

            return {
                fileDisplayHTML
                , message,
                stylemsg
            };
        }
        $(document).ready(function() {
            $('.viemorebtn').on('click', function() {
                var recordId = $(this).data('record-id');
                var chassiss = recordId.frameno;
                console.log(chassiss);
                $('#modalbody').empty();
                var modalbody = '';

                buyVehiclesData.forEach(function(value) {
                    let message = '';
                    if (value.chassisnumber === chassiss) {
                        let rcFileDisplayHTML = getFileDisplayHTML(value.rcimage, 'RC');
                        let invoiceFileDisplayHTML = getFileDisplayHTML(value.invoiceimage, 'Invoice');
                        let insuranceFileDisplayHTML = getFileDisplayHTML(value.insuranceimage, 'Insurance');

                        modalbody += `
                    <div class="row mt-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="">
                                <div class="flex-grow-1">
                                    <p class="text-success mb-1">Set HSRP Status</p>
                                    <select name="statustype" class="form-select mb-3" aria-label="Default select example" id="numberplatestatus">
                                        <option value="">Choose....</option>
                                        <option value="inproces" ${value.numberplatestatus === 'inproces' ? 'selected' : ''}>In Process</option>
                                        <option value="available" ${value.numberplatestatus === 'available' ? 'selected' : ''}>Available</option>
                                        <option value="fitted" ${value.numberplatestatus === 'fitted' ? 'selected' : ''}>Fitted</option>
                                    </select>
                                    <input type="hidden" name="recordid" value="${value.id}" id="recordid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card">
                            <div class="mt-4">
                                <h4 class="text-black-fw-bold mb-3">Download Vehicle Documents</h4>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card border border-1">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0 text-center">RC Document</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="p-2 mt-3 ">
                                                    ${rcFileDisplayHTML.fileDisplayHTML}
                                                </div>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <a href="/uploads/${value.rcimage}" class="btn ${rcFileDisplayHTML.stylemsg} waves-effect waves-light btn-sm" download="RC"> ${rcFileDisplayHTML.message}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border border-1">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0 text-center">Invoice Document</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="p-2 mt-3">
                                                    ${invoiceFileDisplayHTML.fileDisplayHTML}
                                                </div>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <a href="/uploads/${value.invoiceimage}" class="btn ${invoiceFileDisplayHTML.stylemsg} waves-effect waves-light btn-sm" download="Invoice">${invoiceFileDisplayHTML.message}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border border-1">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0 text-center">Insurance Document</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="p-2 mt-3">
                                                    ${insuranceFileDisplayHTML.fileDisplayHTML}
                                                </div>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <a href="/uploads/${value.insuranceimage}" class="btn ${insuranceFileDisplayHTML.stylemsg} waves-effect waves-light btn-sm" download="Insurance">${insuranceFileDisplayHTML.message}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                    }
                });

                $('#modalbody').append(modalbody);

                $('#numberplatestatus').change(function() {
                    var selectedStatus = $(this).val();
                    var recordId = $('#recordid').val();
                    console.log(recordId);
                    console.log(selectedStatus);

                    // Updating Status
                    $.ajax({
                        url: '/updatenumberplatestatus'
                        , method: 'POST'
                        , data: {
                            status: selectedStatus
                            , record_id: recordId
                        }
                        , headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        , success: function(response) {
                            console.log(response);
                        }
                        , error: function(error) {
                            console.error(error);
                        }
                    });
                });
            });
        });

    </script>
</x-app-layout>
