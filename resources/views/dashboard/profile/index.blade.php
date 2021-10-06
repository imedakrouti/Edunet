@extends('layouts.Dashboard.app')
@section('styles')
<link href="{{asset('admin\assets/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')


        <!--begin::Subheader-->
        @section('Subheader')
        <div class="subheader py-2 py-lg-4" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.Myacount')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.Accountsettings')</span>

                    </div>

                </div>
                <!--end::Details-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="#" class=""></a>
                    <!--end::Button-->
                    <!--begin::Button-->

                    <!--end::Button-->
                    <!--begin::Dropdown-->

                    <!--end::Dropdown-->
                </div>
                <!--end::Toolbar-->

            </div>
        </div>
        @endsection

        <!--end::Subheader-->
        <div class="container ">
            <!--begin::Education-->
            <div class="d-flex flex-row ">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                    <!--begin::Nav Panel Widget 2-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Wrapper-->
                            <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                <!--begin::Container-->
                                <div class="pb-5">
                                    <!--begin::Header-->
                                    <div class="d-flex flex-column flex-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-120 symbol-circle overflow-hidden">
                                            <span class="symbol-label">
                                                <img src="{{ auth::user()->path_image }}" class=" rounded-circle" alt="">
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Username-->
                                        <p class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{ auth::user()->name }}</p>
                                        <!--end::Username-->
                                        <!--begin::Info-->
                                        <div class="font-weight-bold text-dark-50 font-size-sm pb-6">{{ auth::user()->email }}</div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    @role('teacher')
                                    <div class="pt-1">

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-3">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <i class="fas fa-wrench text-success"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1 text-center">
                                                <p class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">@lang('site.tasks')</p>
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <span class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">{{ auth::user()->teacher->tasks->count() }}</span>
                                            <!--end::label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-3">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                                        <i class="fas fa-book-open text-warning"></i>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1 text-center">
                                                <p class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder"> @lang('site.courses')</p>
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <span class="font-weight-bolder label label-xl label-light-primary label-inline py-5 min-w-45px">{{ auth::user()->teacher->courses->count() }}</span>
                                            <!--end::label-->
                                        </div>
                                        <div class="d-flex align-items-center pb-3">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
                                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
                                            </g>
                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            @foreach ($matieres as $matiere)
                                                 <div class="d-flex  flex-grow-1 text-center">
                                                 <span class="badge badge-primary mx-2">{{$matiere->title}}</span>
                                                 <span class="badge badge-primary ">{{$matiere->title}}</span>
                                                <p class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder"> </p>
                                            </div>
                                            @endforeach
                                           
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <!--end::label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    
                                    @endrole
                                    <!--end::Body-->
                                </div>
                                <!--eng::Container-->

                                <!--end::Footer-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Nav Panel Widget 2-->
                    <!--begin::List Widget 17-->

                    <!--end::List Widget 17-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-bs">
                        <!--Begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="nav-text font-weight-bold">إعدادات                                            </span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--Begin::Body-->
                        <div class="card-body px-0">
                            <div class="tab-content pt-5">
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                    <form class="form">
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">معلومات:</h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Photo</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="image-input image-input-outline image-input-circle" id="kt_user_avatar" style="background-image: url({{auth::user()->path_image}})">
                                                    <div class="image-input-wrapper" style="background-image: url(assets/media/svg/avatars/007-boy-2.svg)"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="profile_avatar_remove">
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">@lang('site.first_name')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth::user()->first_name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">@lang('site.last_name')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth::user()->last_name}}">
                                            </div>
                                        </div>
                                       @role('teacher')
                                       <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-right col-form-label">@lang('site.address')</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth::user()->teacher->address}}">
                                        </div>
                                    </div>
                                        @endrole
                                       @role('student')
                                       <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-right col-form-label">@lang('site.address')</label>
                                        <div class="col-lg-9 col-xl-6">
                                         
                                            <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth::user()->student->address}}">
                                          
                                        </div>
                                    </div>
                                        @endrole
                                        @role('student')
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">@lang('site.phone')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" value="{{auth::user()->student->phone}}" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        @endrole
                                        @role('teacher')
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">@lang('site.phone')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" value="{{auth::user()->teacher->phone}}" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        @endrole
                                        <div class="form-group row mb-0">

                                            <button type="submit" class="btn btn-warning btn-shadow-hover font-weight-bolder px-5 py-3 mx-auto">
                                                <i class="fa fa-edit"></i>
                                                @lang('site.update')
                                            </button>
                
                                    </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                    <form class="form">
                                        <!--begin::Notice-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <div class="alert alert-custom alert-light-danger fade show mb-9" role="alert">
                                                    <div class="alert-icon">
                                                        <i class="flaticon-warning"></i>
                                                    </div>
                                                    <div class="alert-text">Configure user passwords to expire periodically.
                                                    <br>Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                                    <div class="alert-close">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">
                                                                <i class="ki ki-close"></i>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Notice-->
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">Account:</h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Username</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="spinner spinner-sm spinner-success spinner-right">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" value="nick84">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Email Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" value="nick.watson@loop.com" placeholder="Email">
                                                </div>
                                                <span class="form-text text-muted">Email will not be publicly displayed.
                                                <a href="#">Learn more</a>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Language</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select class="form-control form-control-lg form-control-solid">
                                                    <option>Select Language...</option>
                                                    <option value="id">Bahasa Indonesia - Indonesian</option>
                                                    <option value="msa">Bahasa Melayu - Malay</option>
                                                    <option value="ca">Català - Catalan</option>
                                                    <option value="cs">Čeština - Czech</option>
                                                    <option value="da">Dansk - Danish</option>
                                                    <option value="de">Deutsch - German</option>
                                                    <option value="en" selected="selected">English</option>
                                                    <option value="en-gb">English UK - British English</option>
                                                    <option value="es">Español - Spanish</option>
                                                    <option value="eu">Euskara - Basque (beta)</option>
                                                    <option value="fil">Filipino</option>
                                                    <option value="fr">Français - French</option>
                                                    <option value="ga">Gaeilge - Irish (beta)</option>
                                                    <option value="gl">Galego - Galician (beta)</option>
                                                    <option value="hr">Hrvatski - Croatian</option>
                                                    <option value="it">Italiano - Italian</option>
                                                    <option value="hu">Magyar - Hungarian</option>
                                                    <option value="nl">Nederlands - Dutch</option>
                                                    <option value="no">Norsk - Norwegian</option>
                                                    <option value="pl">Polski - Polish</option>
                                                    <option value="pt">Português - Portuguese</option>
                                                    <option value="ro">Română - Romanian</option>
                                                    <option value="sk">Slovenčina - Slovak</option>
                                                    <option value="fi">Suomi - Finnish</option>
                                                    <option value="sv">Svenska - Swedish</option>
                                                    <option value="vi">Tiếng Việt - Vietnamese</option>
                                                    <option value="tr">Türkçe - Turkish</option>
                                                    <option value="el">Ελληνικά - Greek</option>
                                                    <option value="bg">Български език - Bulgarian</option>
                                                    <option value="ru">Русский - Russian</option>
                                                    <option value="sr">Српски - Serbian</option>
                                                    <option value="uk">Українська мова - Ukrainian</option>
                                                    <option value="he">עִבְרִית - Hebrew</option>
                                                    <option value="ur">اردو - Urdu (beta)</option>
                                                    <option value="ar">العربية - Arabic</option>
                                                    <option value="fa">فارسی - Persian</option>
                                                    <option value="mr">मराठी - Marathi</option>
                                                    <option value="hi">हिन्दी - Hindi</option>
                                                    <option value="bn">বাংলা - Bangla</option>
                                                    <option value="gu">ગુજરાતી - Gujarati</option>
                                                    <option value="ta">தமிழ் - Tamil</option>
                                                    <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                    <option value="th">ภาษาไทย - Thai</option>
                                                    <option value="ko">한국어 - Korean</option>
                                                    <option value="ja">日本語 - Japanese</option>
                                                    <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                    <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Time Zone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select class="form-control form-control-lg form-control-solid">
                                                    <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                    <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                    <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                    <option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                    <option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                    <option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                    <option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                    <option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                    <option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                    <option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                    <option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                    <option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                    <option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                    <option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                    <option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                    <option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                    <option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                    <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                    <option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                    <option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                    <option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                    <option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                    <option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                    <option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                    <option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                    <option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                    <option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                    <option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                    <option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                    <option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                    <option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                    <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                    <option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                    <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                    <option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                    <option data-offset="0" value="UTC">(GMT) UTC</option>
                                                    <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                    <option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                    <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                    <option data-offset="3600" value="London">(GMT+01:00) London</option>
                                                    <option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                    <option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                    <option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                    <option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                    <option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                    <option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                    <option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                    <option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                    <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                    <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                    <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                    <option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                    <option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                    <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                    <option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                    <option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                    <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                    <option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                    <option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                    <option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                    <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                    <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                    <option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                    <option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                    <option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                    <option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                    <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                    <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                    <option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                    <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                    <option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                    <option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                    <option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                    <option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                    <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                    <option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                    <option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                    <option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                    <option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                    <option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                    <option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                    <option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                    <option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                    <option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                    <option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                    <option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                    <option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                    <option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                    <option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                    <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                    <option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                    <option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                    <option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                    <option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                    <option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                    <option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                    <option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                    <option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                    <option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                    <option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                    <option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                    <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                    <option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                    <option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                    <option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                    <option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                    <option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                    <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                    <option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                    <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                    <option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                    <option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                    <option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                    <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                    <option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                    <option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                    <option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                    <option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                    <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                    <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                    <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                    <option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                    <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                    <option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                    <option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                    <option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                    <option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                    <option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                    <option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                    <option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                    <option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                    <option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                    <option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                    <option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                    <option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                    <option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                    <option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                    <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                    <option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                    <option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                    <option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                    <option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                    <option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Communication</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="checkbox-inline">
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>Email</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>SMS</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>Phone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-10"></div>
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">Security:</h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Login verification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
                                                <span class="form-text text-muted">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                <a href="#">Learn more</a>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Password reset verification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="checkbox-inline">
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>Require personal information to reset your password.</label>
                                                </div>
                                                <span class="form-text text-muted">For extra security, this requires you to confirm your email or phone number when you reset your password.
                                                <a href="#">Learn more</a>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                                    <form class="form">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="font-size-h6 mb-5">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Email Notification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <span class="switch">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="email_notification_1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Send Copy To Personal Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <span class="switch">
                                                    <label>
                                                        <input type="checkbox" name="email_notification_2">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-10"></div>
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right">When To Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="checkbox-list">
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>You have new notifications.</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>You're sent a direct message</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span></span>Someone adds you as a connection</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right">When To Escalate Emails</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="checkbox-list">
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>Upon new order.</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>New membership approval</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span></span>Member registration</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-10"></div>
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 text-right">Email You With</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="checkbox-list">
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>News about Metronic product and feature updates</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>Tips on getting more out of Keen</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span></span>Things you missed since you last logged into Keen</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span></span>News about Metronic on partner products and other services</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span></span>Tips on Metronic business products</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                    <div class="container">
                                        <form class="form">
                                            <div class="form-group">
                                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="3" placeholder="Type notes"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#" class="btn btn-light-primary font-weight-bold">Add notes</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="separator separator-dashed my-10"></div>
                                        <!--begin::Timeline-->
                                        <div class="timeline timeline-3">
                                            <div class="timeline-items">
                                                <div class="timeline-item">
                                                    <div class="timeline-media">
                                                        <img alt="Pic" src="assets/media/users/300_25.jpg">
                                                    </div>
                                                    <div class="timeline-content">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="mr-2">
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">New order has been placed</a>
                                                                <span class="text-muted ml-2">Today</span>
                                                                <span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
                                                            </div>
                                                            <div class="dropdown ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                                                </a>
                                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                    <!--begin::Navigation-->
                                                                    <ul class="navi navi-hover">
                                                                        <li class="navi-header font-weight-bold py-4">
                                                                            <span class="font-size-lg">Choose Label:</span>
                                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                                        </li>
                                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                                        <li class="navi-footer py-4">
                                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                                        </li>
                                                                    </ul>
                                                                    <!--end::Navigation-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-media">
                                                        <i class="flaticon2-shield text-danger"></i>
                                                    </div>
                                                    <div class="timeline-content">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="mr-2">
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Member has sent a request.</a>
                                                                <span class="text-muted ml-2">8:30PM 20 June</span>
                                                                <span class="label label-light-danger font-weight-bolder label-inline ml-2">pending</span>
                                                            </div>
                                                            <div class="dropdown ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                                                </a>
                                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                    <!--begin::Navigation-->
                                                                    <ul class="navi navi-hover">
                                                                        <li class="navi-header font-weight-bold py-4">
                                                                            <span class="font-size-lg">Choose Label:</span>
                                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                                        </li>
                                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                                        <li class="navi-footer py-4">
                                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                                        </li>
                                                                    </ul>
                                                                    <!--end::Navigation-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-media">
                                                        <i class="flaticon2-layers text-warning"></i>
                                                    </div>
                                                    <div class="timeline-content">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="mr-2">
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">System deployment has been completed.</a>
                                                                <span class="text-muted ml-2">11:00AM 30 June</span>
                                                                <span class="label label-light-warning font-weight-bolder label-inline ml-2">done</span>
                                                            </div>
                                                            <div class="dropdown ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                                                </a>
                                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                    <!--begin::Navigation-->
                                                                    <ul class="navi navi-hover">
                                                                        <li class="navi-header font-weight-bold py-4">
                                                                            <span class="font-size-lg">Choose Label:</span>
                                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                                        </li>
                                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                                        <li class="navi-footer py-4">
                                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                                        </li>
                                                                    </ul>
                                                                    <!--end::Navigation-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-media">
                                                        <i class="flaticon2-notification fl text-primary"></i>
                                                    </div>
                                                    <div class="timeline-content">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="mr-2">
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Database backup has been completed.</a>
                                                                <span class="text-muted ml-2">2 months ago</span>
                                                                <span class="label label-light-primary font-weight-bolder label-inline ml-2">delivered</span>
                                                            </div>
                                                            <div class="dropdown ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                                                </a>
                                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                    <!--begin::Navigation-->
                                                                    <ul class="navi navi-hover">
                                                                        <li class="navi-header font-weight-bold py-4">
                                                                            <span class="font-size-lg">Choose Label:</span>
                                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                                        </li>
                                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                                        <li class="navi-footer py-4">
                                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                                        </li>
                                                                    </ul>
                                                                    <!--end::Navigation-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab Content-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Education-->
        </div>
        @stop
        @section('scripts')

<!--begin::Page Scripts(used by this page)-->


<script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<!--end::Page Scripts-->
<script>
    console.log('imed')
</script>
@endsection



