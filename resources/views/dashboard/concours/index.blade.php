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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.concours')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.list') @lang('site.concour')</span>

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
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title ">
                    <span class="svg-icon menu-icon mr-2">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-left-panel-2.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    @lang('site.list') @lang('site.concours')   </h3>
                   {{--  <div class="quick-search quick-search-inline w-auto w-lg-300px" id="kt_quick_search_inline">
                        <!--begin::Form-->
                        <form  action="{{ route('dashboard.student.index')}}"method="get" class="quick-search-form">
        
                            <div class="input-group rounded bg-light">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </div>
                                <input type="text" name="table_search" class="form-control h-40px" placeholder="@lang('site.search')..."value="{{request()->table_search}}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="quick-search-close ki ki-close icon-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </form> -
                        <!--end::Form-->
                        <!--begin::Search Toggle-->
                        <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                        <!--end::Search Toggle-->
                        <!--begin::Dropdown-->
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                            <div class="quick-search-wrapper scroll ps" data-scroll="true" data-height="350" data-mobile-height="200" style="height: 350px; overflow: hidden;"><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                 <div class="card-toolbar">
         
                        <a href="{{ route('dashboard.student.create') }}" class="btn btn-success font-weight-bolder font-size-sm">
                            <span class="svg-icon svg-icon-md svg-icon-white">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>@lang('site.add') @lang('site.student')</a>
                </div>--}}
            </div>
            <div class="card-body  d-flex justify-content-center align-items-center">
                <!--begin::Example-->
                <div class="table-responsive">
                    <div class="table table-head-custom table-head-bg table-vertical-center table-borderless table-hover" >
            
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">الدوره</th>
                                    <th scope="col">@lang('site.english')</th>
                                    <th scope="col">@lang('site.french')</th>
                                    <th scope="col">@lang('site.math')</th>
                                    <th scope="col">@lang('site.arabic')</th>
                                    <th scope="col">@lang('site.science')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">2008</th>
                                    <td><a href="{{ asset('uploads/concours/2008/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2008/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2008/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2008/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2008/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2009</th>
                                    <td><a href="{{ asset('uploads/concours/2009/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2009/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2009/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2009/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2009/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2010</th>
                                    <td><a href="{{ asset('uploads/concours/2010/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2010/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2010/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2010/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2010/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2012</th>
                                    <td><a href="{{ asset('uploads/concours/2012/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2012/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2012/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2012/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2012/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2013</th>
                                    <td><a href="{{ asset('uploads/concours/2013/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2013/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2013/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2013/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2013/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2015</th>
                                    <td><a href="{{ asset('uploads/concours/2015/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2015/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2015/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2015/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2015/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2016</th>
                                    <td><a href="{{ asset('uploads/concours/2016/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2016/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2016/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2016/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2016/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2017</th>
                                    <td><a href="{{ asset('uploads/concours/2017/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2017/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2017/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2017/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2017/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2018</th>
                                    <td><a href="{{ asset('uploads/concours/2018/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2018/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2018/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2018/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2018/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2019</th>
                                    <td><a href="{{ asset('uploads/concours/2019/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2019/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2019/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2019/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2019/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    
                                   
                                </tr>
                                <tr>
                                    <th scope="row">2020</th>
                                    <td><a href="{{ asset('uploads/concours/2020/anglais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2020/francais.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2020/math.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2020/arabe.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                    <td><a href="{{ asset('uploads/concours/2020/svt.pdf') }}" class="text-danger">@lang('site.download')</a></td>
                                                   
                                </tr>
            
                               
                               
            
                            </tbody>
                        </table>
            
                    </div>
                    </div>
               
                  
            </div>
        </div>
        <!--end::Subheader-->
        @stop
        @section('scripts')

<!--begin::Page Scripts(used by this page)-->


<script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<!--end::Page Scripts-->
<script>
    console.log('imed')
</script>
@endsection



