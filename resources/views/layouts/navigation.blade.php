<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    {{-- <input class="au-input au-input--xl" type="text" name="search"
                        placeholder="Search for datas &amp; reports..." /> --}}
                    {{-- <button class="au-btn--submit" type="submit"> --}}
                        {{-- <i class="zmdi zmdi-search"></i> --}}
                        {{-- </button> --}}
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            {{-- <i class="zmdi zmdi-comment-more"></i> --}}
                            {{-- <span class="quantity">1</span> --}}
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="image/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Have sent a photo</p>
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="image/icon/avatar-04.jpg" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>You are now connected on message</p>
                                        <span class="time">Yesterday</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            {{-- <i class="zmdi zmdi-email"></i> --}}
                            {{-- <span class="quantity">1</span> --}}
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="image/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="image/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="image/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            {{-- <i class="zmdi zmdi-notifications"></i> --}}
                            {{-- <span class="quantity">3</span> --}}
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        {{-- <i class="zmdi zmdi-email-open"></i> --}}
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        {{-- <i class="zmdi zmdi-account-box"></i> --}}
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        {{-- <i class="zmdi zmdi-file-text"></i> --}}
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image avatar-online">
                                <img src="{{ asset('image/user/' . Auth::user()->image)}}" alt="avatar" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Auth::user()->name ? Auth::user()->name : 'Admin'
                                    }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('image/user/' . Auth::user()->image)}}" alt="avatar " />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name ? Auth::user()->name : 'Admin' }}</a>
                                        </h5>
                                        <small class="text-muted">{{ Auth::user()->email ? Auth::user()->email : ''
                                            }}</small><br>
                                        <small class="text-muted">
                                            @if (Auth::user()->role == 0)
                                            Nhân viên
                                            @elseif (Auth::user()->role == 1)
                                            Quản lý
                                            @elseif (Auth::user()->role == 2)
                                            Giám đốc
                                            @else
                                            Không xác định
                                            @endif
                                        </small>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('user.profile', Auth::user()->id) }}">
                                            <i class="zmdi zmdi-account"></i>Thông tin cá nhân</a>
                                    </div>

                                    <div class="account-dropdown__item">
                                        <a href="{{ route('user.changePasswordForm', Auth::user()->id) }}">
                                            <i class="zmdi zmdi-edit"></i>Đổi mật khẩu</a>
                                    </div>
                                </div>

                                <div class="account-dropdown__footer">
                                    {{-- <i class="zmdi zmdi-power"> --}}
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">{{ __('Đăng xuất') }}</span>
                                            </x-responsive-nav-link>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
