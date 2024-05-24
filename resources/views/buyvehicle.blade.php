{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <style>
        .dropdownsearch {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Ubuntu', sans-serif;

        }

        .options {
            margin: 1rem;
            width: 100%;
            height: auto;
        }

        @media(max-width:34em) {
            .main {
                min-width: 150px;
                width: auto;
            }
        }

        select {
            display: none !important;
        }

        .dropdown-select {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
            background-color: #fff;
            border-radius: 6px;
            border: solid 1px #eee;
            box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            float: left;
            font-size: 14px;
            font-weight: normal;
            height: 42px;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: auto;

        }

        .dropdown-select:focus {
            background-color: #fff;
        }

        .dropdown-select:hover {
            background-color: #fff;
        }

        .dropdown-select:active,
        .dropdown-select.open {
            background-color: #fff !important;
            border-color: #bbb;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
        }

        .dropdown-select:after {
            height: 0;
            width: 0;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #777;
            -webkit-transform: origin(50% 20%);
            transform: origin(50% 20%);
            transition: all 0.125s ease-in-out;
            content: '';
            display: block;
            margin-top: -2px;
            pointer-events: none;
            position: absolute;
            right: 10px;
            top: 50%;
        }

        .dropdown-select.open:after {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .dropdown-select.open .list {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            pointer-events: auto;
        }

        .dropdown-select.open .option {
            cursor: pointer;
        }

        .dropdown-select.wide {
            width: 100%;
        }

        .dropdown-select.wide .list {
            left: 0 !important;
            right: 0 !important;
        }

        .dropdown-select .list {
            box-sizing: border-box;
            transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
            -webkit-transform: scale(0.75);
            transform: scale(0.75);
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
            background-color: #fff;
            border-radius: 6px;
            margin-top: 4px;
            padding: 3px 0;
            opacity: 0;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 999;
            max-height: 250px;
            overflow: auto;
            border: 1px solid #ddd;
        }

        .dropdown-select .list:hover .option:not(:hover) {
            background-color: transparent !important;
        }

        .dropdown-select .dd-search {
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem;
        }

        .dropdown-select .dd-searchbox {
            width: 100%;
            border: 1px solid #999;
            border-color: #999;
            border-radius: 4px;
            outline: none;
        }

        .dropdown-select .dd-searchbox:focus {
            border-color: #12CBC4;
        }

        .dropdown-select .list ul {
            padding: 0;
        }

        .dropdown-select .option {
            cursor: default;
            font-weight: 400;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 29px;
            text-align: left;
            transition: all 0.2s;
            list-style: none;
        }

        .dropdown-select .option:hover,
        .dropdown-select .option:focus {
            background-color: #f6f6f6 !important;
        }

        .dropdown-select .option.selected {
            font-weight: 600;
            color: #12cbc4;
        }

        .dropdown-select .option.selected:focus {
            background: #f6f6f6;
        }

        .dropdown-select a {
            color: #aaa;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .dropdown-select a:hover {
            color: #666;
        }
    </style>
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
                                    <a href=""><button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm">Show
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
                                            <div class="dropdownsearch">
                                                <div class="options">
                                                    <select name="chassisnumber" id="dynamic_select">
                                                        <option value="">select frame no</option>
                                                        @foreach ($exceldata as $row)
                                                            <option value="{{ $row->frameno }}">
                                                                {{ $row->frameno }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Vehicle Modal</label>
                                                <input type="text" class="form-control" id="vehiclemodal"
                                                    placeholder="vehicle modal" name="vehiclemodal">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Vehicle
                                                    Type</label>
                                                <input type="text" class="form-control" id="vehicletype"
                                                    placeholder="vehicle type" name="type" value="">
                                            </div>
                                        </div>
                                        <input type="hidden" id="customerid" name="customerid"
                                            value="{{ $customerid }}">
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Vehicle Color</label>
                                                <input type="text" class="form-control" id="vehicolor"
                                                    placeholder="vehicle color" name="color">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-0 flex-grow-1 text-center mt-3">Information</h4>
                                    <div class="row  p-2">
                                        <div class="col-lg-4 card p-2 border border-1">
                                            <div>
                                                <label for="placeholderInput" class="form-label">RC
                                                    Number</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter RC Number" name="rcnumber">
                                                @error('rcnumber')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <script>
        function create_custom_dropdowns() {
            $('select').each(function(i, select) {
                if (!$(this).next().hasClass('dropdown-select')) {
                    $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') +
                        '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                    var dropdown = $(this).next();
                    var options = $(select).find('option');
                    var selected = $(this).find('option:selected');
                    dropdown.find('.current').html(selected.data('display-text') || selected.text());
                    options.each(function(j, o) {
                        var display = $(o).data('display-text') || '';
                        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                                'selected' : '') + '" data-value="' + $(o).val() +
                            '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                    });
                }
            });

            $('.dropdown-select ul').before(
                '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>'
            );
        }

        // Event listeners

        // Open/close
        $(document).on('click', '.dropdown-select', function(event) {
            if ($(event.target).hasClass('dd-searchbox')) {
                return;
            }
            $('.dropdown-select').not($(this)).removeClass('open');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).find('.option').attr('tabindex', 0);
                $(this).find('.selected').focus();
            } else {
                $(this).find('.option').removeAttr('tabindex');
                $(this).focus();
            }
        });

        // Close when clicking outside
        $(document).on('click', function(event) {
            if ($(event.target).closest('.dropdown-select').length === 0) {
                $('.dropdown-select').removeClass('open');
                $('.dropdown-select .option').removeAttr('tabindex');
            }
            event.stopPropagation();
        });

        function filter() {
            var valThis = $('#txtSearchValue').val();
            $('.dropdown-select ul > li').each(function() {
                var text = $(this).text();
                (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
            });
        };
        // Search

        // Option click
        $(document).on('click', '.dropdown-select .option', function(event) {
            $(this).closest('.list').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var text = $(this).data('display-text') || $(this).text();
            $(this).closest('.dropdown-select').find('.current').text(text);
            $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        });

        // Keyboard events
        $(document).on('keydown', '.dropdown-select', function(event) {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[
                0]);
            // Space or Enter
            //if (event.keyCode == 32 || event.keyCode == 13) {
            if (event.keyCode == 13) {
                if ($(this).hasClass('open')) {
                    focused_option.trigger('click');
                } else {
                    $(this).trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    focused_option.next().focus();
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                        '.list .option.selected')[0]);
                    focused_option.prev().focus();
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($(this).hasClass('open')) {
                    $(this).trigger('click');
                }
                return false;
            }
        });

        $(document).ready(function() {
            create_custom_dropdowns();
        });
    </script>

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
                    console.log("this working", response);
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
    <script>
        $(function() {
            $('#dynamic_select').on('change', function() {
                var selectedValue = $(this).val();
                console.log(selectedValue);
                $.ajax({
                    url: "/showstockdetails/" + selectedValue,
                    type: "GET",
                    success: function(stockdata) {
                        console.log(stockdata);
                        $('#vehicletype').val(stockdata.vehiclecategory);
                        $('#vehicolor').val(stockdata.color);
                        $('#vehiclemodal').val(stockdata.vehiclemodal);
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: ", error);
                        swal({
                            title: "Not In Stock",
                            text: "Try again later..!!",
                            icon: "warning",
                            buttons: {
                                confirm: "OK"
                            }
                        });
                    }
                });
            });
        });
    </script>
</x-app-layout>
