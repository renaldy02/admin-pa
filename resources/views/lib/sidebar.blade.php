<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item @yield('dashboard')" aria-haspopup="true">
                <a href="{{url('/')}}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">2</span>
											</span>
										</span>
									</span>
                </a>
            </li>
            <li class="m-menu__item @yield('dashboard')" aria-haspopup="true">
                <a href="{{url('transaksi')}}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-shopping-basket"></i>
                    <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">transaksi</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">2</span>
											</span>
										</span>
									</span>
                </a>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-tabs"></i>
                    <span class="m-menu__link-text">Manajemen Produk</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Metronic Datatable</span>
											</span>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu @yield('data-user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="{{url('hotel')}}" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">Data Hotel</span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu @yield('data-user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="{{url('restaurant')}}" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">data restaurant</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-tabs"></i>
                    <span class="m-menu__link-text">Manajemen karyawan</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Metronic Datatable</span>
											</span>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu @yield('data-user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="{{url('karyawan')}}" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">datakaryawan</span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu @yield('data-user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="{{url('absensi')}}" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">Data absensi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @ability('root','create-user')
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Setting</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-tabs"></i>
                    <span class="m-menu__link-text">Manajemen User</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Metronic Datatable</span>
											</span>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu @yield('data-user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="{{url('/manajemen-user/user')}}" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">Data User</span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu @yield('data-user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="{{url('/manajemen-user/logs')}}" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">Log Activity</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endability
        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>