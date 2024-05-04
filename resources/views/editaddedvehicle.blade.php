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
                                    <form action="{{ route('updatevehicle') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row gy-4">
                                            <div class="col-lg-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Vehicle
                                                        Name</label>
                                                    <input type="text" class="form-control" id="placeholderInput"
                                                        placeholder="enter name" name="name"
                                                        value="{{ $row->name }}">
                                                    <input type="hidden" name="vehicleid" value="{{ $row->id }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Model No.</label>
                                                    <input type="text" class="form-control" id="placeholderInput"
                                                        placeholder="enter model no" name="modelno"
                                                        value="{{ $row->modelno }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Price</label>
                                                    <input type="text" class="form-control" id="placeholderInput"
                                                        placeholder="enter price" name="price"
                                                        value="{{ $row->price }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Vehicle
                                                        Color</label>
                                                    <select name="colors" class="form-select mb-3"
                                                        aria-label="Default select example" id="">
                                                        <option disabled>...Choose Color...</option>
                                                        @foreach ($masterdatacolor as $rowmaster)
                                                            <option {{ $rowmaster->label == $row->color ? 'selected' : '' }}  value="{{ $rowmaster->label }}">
                                                                {{ $rowmaster->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Vehicle
                                                        Discription</label>
                                                    <textarea name="discription" class="form-control" id="exampleFormControlTextarea5" rows="3">{{ $row->discription }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Thumbnail
                                                        Image</label>
                                                    <input type="file" class="form-control" id="image"
                                                        placeholder="" name="bannerimage" onchange="readURL(this);">
                                                    <input type="hidden" name="pbannerimg"
                                                        value="{{ $row->bannerimage }}">

                                                    <div class="p-2 mt-3 border border-1 card">
                                                        @if ($row->bannerimage)
                                                            <img src="{{ asset('uploads/vehicle/' . $row->bannerimage) }}"
                                                                alt="Thumbnail" class="img-fluid" id="blah">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Vehicle
                                                        Images</label>
                                                    <input type="file" class="form-control" id="imagenew"
                                                        placeholder="" name="image[]" multiple>
                                                    <input type="hidden" name="pgalleryimgs"
                                                        value="{{ $row->image }}">
                                                    <div class="row">
                                                        @foreach ($vehicles as $value)
                                                            @if ($value->image)
                                                                @php
                                                                    $imagePaths = explode(',', $value->image);
                                                                @endphp
                                                                @foreach ($imagePaths as $index => $img)
                                                                    <div
                                                                        class=" col-lg-4 p-2 mt-3 border border-1 ms-0 card">
                                                                        <img src="{{ asset($img) }}" alt=""
                                                                            class="img-fluid" />
                                                                        <button type="button" class="mt-2 btn btn-danger text-danger btn-sm bg-transparent remove-btn"
                                                                            data-id="{{ $row->id }}" data-index="{{ $index }}">remove</button>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3" id="imagePreviewContainer">
                                                        <!-- Image previews will be displayed here -->
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4 col-md-6 ">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Vehicle Images</label>
                                                    <input type="hidden" class="form-control" id="image"
                                                        placeholder="" name="image[]" multiple>
                                                    <input type="hidden" name="pgalleryimgs"
                                                        value="{{ $row->image }}">



                                                </div>
                                            </div> --}}
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.remove-btn').click(function() {
                var id = $(this).data('id');
                var index = $(this).data('index');
                console.log(id);
                console.log(index);
                $.ajax({
                    url: '/updateimages',
                    type: 'POST',
                    data: { id: id, index: index },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        window.location.reload();
                        console.log(response);
                    }
                });
            });
        });
    </script>

    <script>
        document.getElementById('imagenew').addEventListener('change', function() {
            const previewContainer = document.getElementById('imagePreviewContainer');
            const files = this.files;

            previewContainer.innerHTML = ''; // Clear previous previews

            if (files) {
                [...files].forEach(file => {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = 'Preview';
                        img.className = 'img-fluid col-lg-4 p-2 mt-3 border border-1 ms-0 card';

                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                });
            }
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
</x-app-layout>
