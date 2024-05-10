{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <!-- Add this to the head section of your HTML file -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Good Morning, {{ Auth::user()->name }}</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store
                                            today.</p>
                                    </div>
                                    {{-- <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-sm-auto">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control border-0 dash-filter-picker shadow"
                                                            data-provider="flatpickr" data-range-date="true"
                                                            data-date-format="d M, Y"
                                                            data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                        <div
                                                            class="input-group-text bg-primary border-primary text-white">
                                                            <i class="ri-calendar-2-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-success"><i
                                                            class="ri-add-circle-line align-middle me-1"></i>
                                                        Add Product</button>
                                                </div>
                                                <!--end col-->
                                                <div class="col-auto">
                                                    <button type="button"
                                                        class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i
                                                            class="ri-pulse-line"></i></button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div> --}}
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-2 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    All Vehicles</p>
                                            </div>
                                            {{-- <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                    +16.24 %
                                                </h5>
                                            </div> --}}
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value"
                                                        data-target="{{ $vehiclescount }}">{{ $vehiclescount }}</span>
                                                </h4>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class=" bx bx-car  text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Vehicles Sold</p>
                                            </div>
                                            {{-- <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                    +16.24 %
                                                </h5>
                                            </div> --}}
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value"
                                                        data-target="{{ $BuyVehiclescount }}">{{ $BuyVehiclescount }}</span>
                                                </h4>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bxs-truck  text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Customers</p>
                                            </div>
                                            {{-- <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                    +16.24 %
                                                </h5>
                                            </div> --}}
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value"
                                                        data-target="{{ $Customerscount }}">{{ $Customerscount }}</span>
                                                </h4>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class=" bx bxs-user  text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Leads</p>
                                            </div>
                                            {{-- <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                    +16.24 %
                                                </h5>
                                            </div> --}}
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value"
                                                        data-target="{{ $leadcount }}">{{ $leadcount }}</span>
                                                </h4>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i
                                                        class=" bx bx-bell
                                                    text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card card-height-100">
                                    <div class="card-body">
                                        <canvas id="donutChart" width="300" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-height-100">
                                    <div class="card-body">
                                        <canvas id="barCharttype" width="300" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-height-100">
                                        <div class="p-3">
                                            <h6 class="text-muted mb-3 text-uppercase">All Leads</h6>
                                            <!-- Swiper -->
                                            <div class="swiper vertical-swiper" style="height: 300px;">
                                                <div class="swiper-wrapper">
                                                    @foreach ($allleads as $row)
                                                    <div class="swiper-slide">
                                                        <div class="card border border-dashed shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 avatar-sm">
                                                                        <div class="avatar-title bg-light rounded text-dark">
                                                                            {{$row->leadid}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <div>
                                                                            <p class="text-muted mb-1 fst-italic text-truncate-two-lines">{{$row->name}}</p>
                                                                            <div class="fs-11 align-middle text-warning">
                                                                                <p class="text-muted mb-1 fst-italic text-truncate-two-lines">Phone : {{$row->phoneno}}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mb-0 text-muted">
                                                                            created-at <cite title="Source Title">{{$row->created_at}}</cite>
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
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var jsonData = {!! json_encode($vehilecounttotal) !!};
        var data = JSON.parse(jsonData);

        var labels = data.map(function(item) {
            return item.value;
        });

        var counts = data.map(function(item) {
            return item.count;
        });

        var ctx = document.getElementById('donutChart').getContext('2d');
        var donutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    data: counts,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#2df9fc', '#1207e6'],
                }]
            }
        });
    </script>
    <script>
        var jsonData = {!! json_encode($vechiletypecount) !!};
        var data = JSON.parse(jsonData);

        var labels = data.map(function(item) {
            // Check if 'value' property exists and is not undefined
            return item && item.value !== undefined ? item.value : '';
        });

        var counts = data.map(function(item) {
            // Check if 'count' property exists and is not undefined
            return item && item.count !== undefined ? item.count : 0;
        });

        var backgroundColors = data.map(function(item, index) {
            // Add logic here to dynamically set backgroundColor based on category or index
            // Example: assigning different colors based on index
            var colors = ['#FF6384', '#36A2EB', '#FFCE56', '#2df9fc', '#1207e6'];
            return colors[index % colors.length];
        });

        var ctx = document.getElementById('barCharttype').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    data: counts,
                    backgroundColor: backgroundColors,
                    borderColor: backgroundColors,
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
