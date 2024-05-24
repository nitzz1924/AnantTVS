<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <a class="close-btn" onclick="hidebar()"><i class="bi bi-x-lg"></i></a>
            <li class="nav-item">
                <a class="nav-link menu-link" href="{{ route('dashboard') }}" role="button" aria-expanded="false"
                    aria-controls="sidebarDashboards">
                    <i class="bx bxs-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="{{route('viewleads')}}" role="button" aria-expanded="false"
                    aria-controls="sidebarDashboards">
                    <i class="bx bx-bell"></i><span>All Leads</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="{{route('allbuyedvehicles')}}" role="button" aria-expanded="false"
                    aria-controls="sidebarDashboards">
                    <i class="bx bx-money"></i><span>Buyed Vehicles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#stockvehicle" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="stockvehicle">
                    <i class="bx bx-car"></i><span data-key="t-layouts">Vehicle Stock</span>
                </a>
                <div class="collapse menu-dropdown" id="stockvehicle">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="/vehiclestock/0" class="nav-link">In Stock</a>
                        </li>
                        <li class="nav-item">
                            <a href="/vehiclestock/1" class="nav-link">Out of Stock</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarLayoutsone" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarLayoutsone">
                    <i class="bx bx-car"></i><span data-key="t-layouts">Vehicle</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarLayoutsone">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('viewaddvehicle') }}" class="nav-link">Add Vehicle</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewvehicles') }}" class="nav-link">All Vehicles</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarLayoutstwo" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarLayoutstwo">
                    <i class="bx bx-user"></i><span data-key="t-layouts">Customer</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarLayoutstwo">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('viewaddcustomer') }}" class="nav-link">Add Customer</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewallcustomers') }}" class="nav-link">All Customers</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarLayouts">
                    <i class="bx bx-layout"></i><span data-key="t-layouts">Master</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarLayouts">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('viewmaster') }}" class="nav-link">Add Master</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewsubmaster') }}" class="nav-link">Add Sub-Master</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                    <i class="bx bx-sitemap"></i> <span data-key="t-multi-level">Multi Level</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarMultilevel">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCrm">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li> --}}

        </ul>
    </div>
    <script>
        function hidebar()
        {
            var navbar = $("#navcustom");
            if (navbar.css("transform") === "none") {
                navbar.css("transform", "translateX(-250px)");
                // // maincontainrs.css("width", "100%");
                // maincontainrs.css("margin-left", "0px");
                // customfooter.css("left", "0px");
                // pagetopbar.css("left", "0px");

            } else {
                navbar.css("transform", "");
                // maincontainrs.css("margin-left", "250px");
                // // maincontainrs.css("width", "auto");
                // customfooter.css("left", "250px");
                // pagetopbar.css("left", "250px");
            }
        }
    </script>
</div>
