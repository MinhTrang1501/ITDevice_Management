{{-- @php
$categories = App\Models\category::all();
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path
                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                            id="path-1"></path>
                        <path
                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                            id="path-3"></path>
                        <path
                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                            id="path-4"></path>
                        <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"></path>
                    </defs>
                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                </g>
                                <g id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Manh</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li id="menuItem" class=" menu-item">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        @if (Auth::user()->role != 0)
        <!-- Layouts -->
        @if (Auth::user()->role == 2)
        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon far fa-building"></i>
                <div data-i18n="Layouts">Phòng ban</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('department.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Danh sách phòng ban</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('department.create') }}" class="menu-link">
                        <div data-i18n="Without menu">Thêm phòng ban</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-laptop"></i>
                <div data-i18n="Layouts">Thiết bị</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('device.index') }}" class="menu-link">
                        <div data-i18n="Without navbar">Tất cả thiết bị</div>
                    </a>
                </li>

                @foreach ($categories as $category)
                <li class="menu-item">
                    <a href="{{ route('device.showByCategory', $category->id) }}" class="menu-link">
                        <div data-i18n="Without menu">{{ $category->name }}</div>
                    </a>
                </li>
                @endforeach

                <li class="menu-item">
                    <a href="{{ route('device.create') }}" class="menu-link">
                        <div data-i18n="Without navbar">Thêm thiết bị mới</div>
                    </a>
                </li>

            </ul>
        </li>

        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon far fa-list-alt"></i>
                <div data-i18n="Layouts">Quản lý danh mục</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('category.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Danh sách danh mục</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('category.create') }}" class="menu-link">
                        <div data-i18n="Without navbar">Thêm danh mục mới</div>
                    </a>
                </li>
            </ul>
        </li>

        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon far fa-share-square"></i>
                <div data-i18n="Layouts">Quản lý yêu cầu</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('request.listRequest')}}" class="menu-link">
                        <div data-i18n="Container">Danh sách yêu cầu</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{route('request.listRequestBorrow')}}" class="menu-link">
                        <div data-i18n="Container">Yêu cầu mượn thiết bị</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('request.listAdminProvideDevice')}}" class="menu-link">
                        <div data-i18n="Container">Cấp thiết bị</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('request.listRequestReturn')}}" class="menu-link">
                        <div data-i18n="Container">Yêu cầu trả thiết bị</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{route('request.listRequestBroken')}}" class="menu-link">
                        <div data-i18n="Container">Báo hỏng thiết bị</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{route('request.listRequestLicenseKey')}}" class="menu-link">
                        <div data-i18n="Container">Yêu cầu cấp license key</div>
                    </a>
                </li>
            </ul>
        </li>
        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-laptop-code"></i>
                <div data-i18n="Layouts">Quản lý thiết bị</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('request.listDeviceAvailabale') }}" class="menu-link">
                        <div data-i18n="Container">Thiết bị có sẵn</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('request.listDeviceBorrowed') }}" class="menu-link">
                        <div data-i18n="Container">Thiết bị đang cho mượn</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('device.listDeviceBrokening') }}" class="menu-link">
                        <div data-i18n="Without menu">Thiết bị đang hỏng</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('device.listDeviceRepairing') }}" class="menu-link">
                        <div data-i18n="Container">Thiết bị đang sửa chữa</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('device.listDeviceWarranting') }}" class="menu-link">
                        <div data-i18n="Container">Thiết bị đang bảo hành</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('device.listDeviceWarrantiedOrRepaired') }}" class="menu-link">
                        <div data-i18n="Container">Thiết bị đã sửa chữa / bảo hành</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('device.listDeviceLiquidated') }}" class="menu-link">
                        <div data-i18n="Container">Thiết bị đã thanh lý</div>
                    </a>
                </li>

            </ul>
        </li>
        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fab fa-app-store"></i>
                <div data-i18n="Layouts">Quản lý phần mềm</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('software.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Tất cả phần mềm</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('software.listSoftwareExpire') }}" class="menu-link">
                        <div data-i18n="Container">Phần mềm sắp hết hạn</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('software.listSoftwareOutOfUsage') }}" class="menu-link">
                        <div data-i18n="Container">Phần mềm đã hết lượt dùng license key</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('software.create') }}" class="menu-link">
                        <div data-i18n="Container">Thêm phần mềm mới</div>
                    </a>
                </li>
            </ul>
        </li>

        @if (Auth::user()->role == 2)
        <li id="menuItem" class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-users-cog"></i>
                <div data-i18n="Layouts">Quản lý người dùng</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('user.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Danh sách người dùng</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.create') }}" class="menu-link">
                        <div data-i18n="Without navbar">Thêm người dùng</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @else
        <div id="menuItem" class="menu-item">
            <a href="{{ route('request.listRequestByUser') }}" class="menu-link">
                <i class="menu-icon fas fa-stream"></i>
                <div data-i18n="Without navbar">Yêu cầu đã gửi</div>
            </a>
        </div>
        <div id="menuItem" class="menu-item">
            <a href="{{ route('request.listDeviceBorrow') }}" class="menu-link">
                <i class="menu-icon fas fa-laptop-code"></i>
                <div data-i18n="Without navbar">Thiết bị đang mượn</div>
            </a>
        </div>
        <div id="menuItem" class="menu-item ">
            <a href="{{ route('request.showBorrowForm') }}" class="menu-link">
                <i class="menu-icon far fa-paper-plane"></i>
                <div data-i18n="Without navbar">Mượn thiết bị</div>
            </a>
        </div>

        @endif
    </ul>
</aside> --}}

<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
