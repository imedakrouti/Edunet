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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.courses')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.list') @lang('site.courses')</span>

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

       {{--  {{$coursess->courses_count}}
        {{$courses->teachers_count}} --}}
     {{--    @foreach($courses as $course)
        <h1>{{$course->title}}</h1>
        <a href="{{ route('dashboard.download.course',$course->course) }}"> Download  </a>

        @endforeach --}}
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title ">
                    <span class="svg-icon menu-icon svg-icon-primary mr-2">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-06-223557/theme/html/demo1/dist/../src/media/svg/icons/Tools/Tools.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                                <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg><!--end::Svg Icon-->

                        <!--end::Svg Icon-->
                    </span>
                    @lang('site.list') @lang('site.courses')   </h3>
                    <div class="quick-search quick-search-inline w-auto w-lg-300px mx-auto" id="kt_quick_search_inline">
                        <!--begin::Form-->
                        <form  action="{{ route('dashboard.course.index')}}"method="get" class="quick-search-form">

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
                        </form>
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
                    @permission('courses-create')
                    <div class="card-toolbar">

                        <a href="{{ route('dashboard.course.create') }}" class="btn btn-success font-weight-bolder font-size-sm">
                            <span class="svg-icon svg-icon-md svg-icon-white">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>@lang('site.add') @lang('site.course')</a>
                </div>
                @endpermission
            </div>
            <div class="card-body bg-secondary d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                @forelse($courses as $course)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b "data-card="true">
                        <div class="card-header ">
                            <div class="card-title">
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="mr-5">
                                        <span class="symbol-label">
                                            <img src="{{ $course->teacher->user->path_image }}"height="50px"width="50px" class="align-self-end rounded-circle cursor-pointer" alt=""data-toggle="tooltip" title="" data-placement="right" data-original-title="{{ $course->teacher->user->name }}">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                  {{--   <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">{{ $course->teacher->user->name }}</a>
                                        <span class="text-muted font-weight-bold">{{ $course->created_at->format('Y/m/d') }}</span>
                                    </div> --}}
                                    <div class="d-flex flex-column flex-grow-1">
                                        <p class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">{{ $course->title }}</p>
                                        <div class="d-flex">
                                            <div class="d-flex flex-column align-items-center pr-5">

                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="svg-icon svg-icon-md svg-icon-primary pr-1">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-arrange.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"></path>
                                                            <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="text-muted font-weight-bold">{{$course->subject->title}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Dropdown-->

                                    <!--end::Dropdown-->
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                    <i class="ki ki-arrow-down icon-nm"></i>
                                </a>
                                @permission('courses-update')
                                <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1" data-card-tool="reload">
                                    <i class="ki ki-gear icon-nm"></i>
                                </a>
                                @endpermission
                                @permission('courses-delete')
                                <button class="btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="modal" data-target="#Delete_Course{{ $course->id }}" title="Supprimer Course" >
                                    <i class="ki ki-close icon-nm"></i>
                                </button>
                                @include('dashboard.courses.delete')
                                @endpermission
                            </div>
                        </div>
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Wrapper-->
                            <div class="card-body ">
                                <!--begin::Top-->

                                <!--end::Top-->
                                <!--begin::Bottom-->
                                <div class="pt-2">
                                    <!--begin::Image-->
                                    @if($course->type=='writable')

{{--                                         <div class="bgi-no-repeat bgi-size-cover bg-white border-blue-500  d-flex justify-content-center align-items-center rounded min-h-265px" style="background-image: url({{ $course->path_image }})"></div>
 --}}                                        <div class="d-flex flex-grow-1 bg-hover-light py-6 px-6 rounded overlay bgi-no-repeat bgi-size-cover bg-white border-blue-500  d-flex justify-content-center align-items-center rounded min-h-265px" style="background-image: url({{ $course->path_image }})">
                                            <div class="overlay-layer d-flex">
                                                <a  class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase  font-size-h3 w-50" href="{{ route('dashboard.download.course',$course->course) }}">@lang('site.download') <i class="fas fa-arrow-circle-down ml-3 text-danger"></i></a>
{{--                                                 <a href="javascript:;" data-toggle="modal" data-target="#svg_inline_Air-conditioningsvg" class="btn btn-sm btn-primary">Or inline SVG</a>
 --}}                                            </div>
                                        </div>
                                  @else
                                  <div class="bg-white border-blue-500  d-flex justify-content-center align-items-center">
                                    <video width="320" height="265" controls>
                                        <source src="{{URL::asset("/uploads/courses/$course->course")}}" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                                </div>

                                            @endif



                                <!--end::Image-->
                                    <!--begin::Text-->
                                    <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">{{ $course->description }}</p>
                                    <!--end::Text-->
                                    <!--begin::Action-->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2">
                                        <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>24</a>
                                        <a href="#" class="btn btn-icon-danger btn-sm btn-text-dark-50 bg-hover-light-danger btn-hover-text-danger rounded font-weight-bolder font-size-sm p-2">
                                        <span class="svg-icon svg-icon-md svg-icon-danger pr-1">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Heart.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>75</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Bottom-->
                                <!--begin::Separator-->
                                <div class="separator separator-solid mt-2 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Editor-->
                                <form class="position-relative">
                                    <textarea id="kt_forms_widget_4_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="Reply..."></textarea>
                                    <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                                        <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                        </span>
                                        <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                                            <i class="flaticon2-pin icon-ms"></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Editor-->
                            </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
               @empty
               @include('dashboard.partials.no_informations')
               @endforelse
        </div>
        <div class="d-flex justify-content-center">
            {{ $courses->appends(request()->query())->links() }}
       </div>
        </div>
        </div>
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



