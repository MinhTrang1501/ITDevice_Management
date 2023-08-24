@php
$categories = App\Models\Category::all();
@endphp


<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="/image/icon/logomain.png" style="max-height: 66px" alt="Logo" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('home') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>

                @if (Auth::user()->role != 0)
                @if (Auth::user()->role == 2)
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon far fa-building"></i>Phòng ban</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('department.index') }}">Danh sách phòng ban</a>
                        </li>
                        <li>
                            <a href="{{ route('department.create') }}">Thêm phòng ban</a>
                        </li>
                    </ul>
                </li>
                @endif

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon fas fa-outdent"></i>Quản lý danh mục</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('category.index') }}">Danh sách danh mục</a>
                        </li>
                        <li>
                            <a href="{{ route('category.create') }}">Thêm danh mục mới</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon fas fa-laptop"></i>Thiết bị</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('device.index') }}">Tất cả thiết bị</a>
                        </li>
                        @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('device.showByCategory', $category->id) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                        <li>
                            <a href="{{ route('device.create') }}">Thêm thiết bị mới</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon far fa-share-square"></i>Quản lý yêu cầu</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('request.listRequest')}}">Danh sách yêu cầu</a>
                        </li>
                        <li>
                            <a href="{{route('request.listRequestBorrow')}}">Yêu cầu mượn thiết bị</a>
                        </li>

                        <li>
                            <a href="{{route('request.listRequestReturn')}}">Yêu cầu trả thiết bị</a>
                        </li>
                        <li>
                            <a href="{{route('request.listRequestBroken')}}">Báo hỏng thiết bị</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('request.listRequestLicenseKey')}}">Yêu cầu cấp license key</a>
                        </li> --}}
                        <li>
                            <a href="{{route('request.listAdminProvideDevice')}}">Admin cấp thiết bị</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon fas fa-desktop"></i>Quản lý thiết bị</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('request.listDeviceAvailabale') }}">Thiết bị có sẵn</a>
                        </li>
                        <li>
                            <a href="{{ route('request.listDeviceBorrowed') }}">Thiết bị đang cho mượn</a>
                        </li>
                        <li>
                            <a href="{{ route('device.listDeviceBrokening') }}">Thiết bị đang hỏng</a>
                        </li>

                        <li>
                            <a href="{{ route('device.listDeviceRepairing') }}">Thiết bị đang sửa chữa</a>
                        </li>
                        <li>
                            <a href="{{ route('device.listDeviceWarranting') }}">Thiết bị đang bảo hành</a>
                        </li>

                        <li>
                            <a href="{{ route('device.listDeviceWarrantiedOrRepaired') }}">Thiết bị đã sửa chữa / bảo
                                hành</a>
                        </li>
                        <li>
                            <a href="{{ route('device.listDeviceLiquidated') }}">Thiết bị đã thanh lý</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon fab fa-windows"></i>Quản lý phần mềm</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('software.index') }}">Tất cả phần mềm</a>
                        </li>
                        <li>
                            <a href="{{ route('software.listSoftwareExpire') }}">Phần mềm sắp hết hạn</a>
                        </li>
                        <li>
                            <a href="{{ route('software.listSoftwareOutOfUsage') }}">Phần mềm đã hết lượt dùng license
                                key</a>
                        </li>
                        <li>
                            <a href="{{ route('software.create') }}">Thêm phần mềm mới</a>
                        </li>
                    </ul>
                </li> --}}

                @if (Auth::user()->role == 2)
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="menu-icon fas fa-users"></i>Quản lý người dùng</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('user.index') }}">Danh sách người dùng</a>
                        </li>
                        <li>
                            <a href="{{ route('user.create') }}">Thêm người dùng</a>
                        </li>
                    </ul>
                </li>
                @endif

                @else
                <li class="has-sub">
                    <a href="{{ route('request.listRequestByUser') }}" class="menu-link">
                        <i class="menu-icon fas fa-stream"></i>
                        Yêu cầu đã gửi
                    </a>
                </li>
                <li class="has-sub">
                    <a href="{{ route('request.listDeviceBorrow') }}" class="menu-link">
                        <i class="menu-icon fas fa-laptop-code"></i>
                        Thiết bị đang mượn
                    </a>
                </li>
                <li class="has-sub">
                    <a href="{{ route('request.showBorrowForm') }}" class="menu-link">
                        <i class="menu-icon far fa-paper-plane"></i>
                        Mượn thiết bị
                    </a>
                </li>

                @endif
            </ul>
        </nav>
    </div>
</aside>
