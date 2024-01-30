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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Vehicle</a></li>
                                <li class="breadcrumb-item active">Edit Vehicle</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if ($mymess = Session::get('success'))
                        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                            <strong>{{ $mymess }}</strong>
                        </div>
                    @endif
                    @if ($mymess = Session::get('error'))
                        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                            <strong>{{ $mymess }}</strong>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Vehicle</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{ route('viewvehicles') }}"><button
                                            type="button"class="btn btn-primary waves-effect waves-light btn-sm">Show
                                            Vehicles</button></a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                @foreach ($vehicles as $row)
                                <form action="{{route('updatevehicle')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Vehicle Name</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter name" name="name" value="{{$row->name}}">
                                                <input type="hidden" name="vehicleid" value="{{$row->id}}">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Select Master
                                                    Category</label>
                                                <select name="type" class="form-select mb-3"
                                                    aria-label="Default select example" id="subcategory">
                                                    <option value="{{ $row->label }}">select vehicle type</option>
                                                    @foreach ($masterdata as $row)
                                                        <option value="{{ $row->label }}">
                                                            {{ $row->label }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Model No.</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter model no" name="modelno" value="{{$row->modelno}}">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Vehicle Color</label>
                                                <select name="color" class="form-select mb-3"
                                                    aria-label="Default select example" id="">
                                                    <option value="">--select color--</option>
                                                    @foreach ($masterdatacolor as $row)
                                                        <option value="{{ $row->label }}">
                                                            {{ $row->label }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Price</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter price" name="price" value="{{$row->price}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Vehicle Images</label>
                                                <input type="file" class="form-control" id="image"
                                                    placeholder="enter color" name="image[]" multiple>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <div>
                                                <label for="exampleFormControlTextarea5" class="form-label">Vehicle
                                                    Discription</label>
                                                <textarea name="discription" class="form-control" id="exampleFormControlTextarea5" rows="3">{{$row->discription}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit"
                                            class="btn btn-success waves-effect waves-light float-end">Update</button>
                                    </div>
                                </form>
                                @endforeach
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</x-app-layout>
