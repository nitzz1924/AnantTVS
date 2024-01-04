{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Anant TVS</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Buy Vehicle</a></li>
                                <li class="breadcrumb-item active">Buy Vehicle</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Buy Vehicle</h4>
                            {{-- <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href=""><button
                                            type="button"class="btn btn-primary waves-effect waves-light btn-sm">Show
                                            Vehicles</button></a>
                                </div>
                            </div> --}}
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('createbuyvehicle') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Select Vehicle
                                                    Type</label>
                                                <select name="type" class="form-select mb-3"
                                                    aria-label="Default select example" id="vehicletypeid">
                                                    <option value="">select vehicle type</option>
                                                    @foreach ($masterdata as $row)
                                                        <option value="{{ $row->value }}">
                                                            {{ $row->value }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="customerid" value="{{ $customerid }}">
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Select your
                                                    Vehicle</label>
                                                <select name="vehicle" class="form-select mb-3"
                                                    aria-label="Default select example" id="vehiclenameid">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Chassis Number</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter chassis number" name="chassisnumber">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Select Color</label>
                                                <select name="color" class="form-select mb-3"
                                                    aria-label="Default select example" id="vehicletypeid">
                                                    <option value="">select color</option>
                                                    @foreach ($mastercolor as $row)
                                                        <option value="{{ $row->value }}">
                                                            {{ $row->value }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-0 flex-grow-1 text-center mt-3">Information</h4>
                                    <div class="row  p-2">
                                        <div class="col-lg-4 card p-2 border border-1">
                                            <div>
                                                <label for="placeholderInput" class="form-label">RC Number</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter RC Number" name="rcnumber">
                                                <div class="mt-3">
                                                    <label for="placeholderInput" class="form-label">Upload RC</label>
                                                    <input type="file" class="form-control" id="image"
                                                        placeholder="enter color" name="uploadrc">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  card p-2 border border-2">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Invoice Number</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter invoice Number" name="invoicenumber">
                                                <div class="mt-3">
                                                    <label for="placeholderInput" class="form-label">Upload Invoice
                                                        Document</label>
                                                    <input type="file" class="form-control" id="image"
                                                        placeholder="enter color" name="uploadinvoice">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 card p-2 border border-2">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Insurance ID</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter insurance id" name="insuranceid">
                                                <div class="mt-3">
                                                    <label for="placeholderInput" class="form-label">Upload Insurance
                                                        Document</label>
                                                    <input type="file" class="form-control" id="image"
                                                        placeholder="enter color" name="uploadinsurance">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border border-0">
                                        <button type="submit"
                                            class="btn btn-success waves-effect waves-light float-end">Buy</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
    <script>
        $('#vehicletypeid').on('change', function() {
            var selectedtype = $(this).val();
            console.log(selectedtype);

            $.ajax({
                url: '/filtervehicle/' + selectedtype,
                type: 'GET',
                success: function(response) {
                    console.log("this working",response);
                    var dropdown1 = $('#vehiclenameid');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    response.vehicle.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.id + '">' + item.name +
                            '</option>'));
                    });
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</x-app-layout>
