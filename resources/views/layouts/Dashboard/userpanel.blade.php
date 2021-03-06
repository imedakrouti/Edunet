<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
        <div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
            <span class="svg-icon svg-icon-lg svg-icon-success">
                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
        <!--begin::Header-->
        <div class="d-flex align-items-center p-8 rounded-top">
            <!--begin::Symbol-->
            <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                <img src="{{ auth::user()->path_image }}" alt="" />
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">{{auth::user()->name}}</div>
            <span class="label label-light-success label-lg font-weight-bold label-inline">3 @lang('site.messages')</span>
            <!--end::Text-->
        </div>
        <div class="separator separator-solid"></div>
        <!--end::Header-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 pt-5">
            <!--begin::Item-->
            <a href="{{route('dashboard.profile.index')}}" class="navi-item px-8">
                <div class="navi-link">
                    <div class="navi-icon mr-2">
                        <i class="flaticon2-calendar-3 text-success"></i>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">@lang('site.Myacount')</div>
                        <div class="text-muted">@lang('site.Accountsettings')
                        <span class="label label-light-danger label-inline font-weight-bold">@lang('site.update')</span></div>
                    </div>
                </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-3.html" class="navi-item px-8">
                <div class="navi-link">
                    <div class="navi-icon mr-2">
                        <i class="flaticon2-mail text-warning"></i>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">????????????</div>
                        <div class="text-muted">???????????? ??????????????</div>
                    </div>
                </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-2.html" class="navi-item px-8">
                <div class="navi-link">
                    <div class="navi-icon mr-2">
                        <i class="flaticon2-rocket-1 text-danger"></i>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">??????????????</div>
                        <div class="text-muted">?????????????? ?? ??????????????</div>
                    </div>
                </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
                <div class="navi-link">
                    <div class="navi-icon mr-2">
                        <i class="flaticon2-hourglass text-primary"></i>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">??????????</div>
                        <div class="text-muted">???????? ???????????? ??????????????????                        </div>
                    </div>
                </div>
            </a>
            <!--end::Item-->
            <!--begin::Footer-->
            <div class="navi-separator mt-3"></div>
            <div class="navi-footer px-8 py-5">



                <a href="{{ route('logout') }}"  class="btn btn-light-primary font-weight-bold"  onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">????????</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
               {{--  <a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean font-weight-bold">Upgrade Plan</a> --}}
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Dropdown-->
</div>
