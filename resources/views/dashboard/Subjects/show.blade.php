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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.subjects')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.list') @lang('site.subjects')</span>

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

       {{--  {{$subjects->courses_count}}
        {{$subjects->teachers_count}} --}}
       {{--  @foreach($subjects as $subject)
        <h1>{{$subject->title}}</h1>
        <a href="{{ route('dashboard.download',$subject->book) }}"> Download  </a>

        @endforeach --}}
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card card-custom">
                        <div class="card-header card-header-tabs-line">
                            <div class="card-title">
                                <h3 class="card-label">{{ $subject->title }}</h3>
                            </div>
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_1_2">
                                            <span class="nav-icon">
                                                <i class="fas fa-folder text-danger"></i>
                                            </span>
                                            <span class="nav-text">@lang('site.books')</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2">
                                            <span class="nav-icon">
                                                <i class="fas fa-book-open text-warning"></i>
                                            </span>
                                            <span class="nav-text">@lang('site.courses')</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_2">
                                        <span class="nav-icon">
                                            <i class="fas fa-wrench text-success"></i>
                                        </span>
                                        <span class="nav-text">@lang('site.tasks')</span>
                                    </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="card-body bg-secondary">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="kt_tab_pane_1_2" role="tabpanel" >
                                    <div class="container">
                                        <div class="row d-flex justify-content-center justify-items-center">
                                    @forelse($books as $book)
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b "data-card="true">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label  font-weight-bolder text-dark ">{{ $book->title }}</h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                                        <i class="ki ki-arrow-down icon-nm"></i>
                                                    </a>
                                                    @permission('subjects-update')
                                                    <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1" data-card-tool="reload">
                                                        <i class="ki ki-gear icon-nm"></i>
                                                    </a>
                                                    @endpermission
                                                    @permission('subjects-delete')
                                                    <button class="btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="modal" data-target="#Delete_Book{{ $book->id }}" title="Supprimer book" >
                                                        <i class="ki ki-close icon-nm"></i>
                                                    </button>
                                                    @include('dashboard.books.delete')
                                                    @endpermission
                                                </div>
                                            </div>
                                            <!--begin::Body-->
                                            <div class="card-body p-0">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex justify-content-between flex-column h-100">
                                                    <!--begin::Container-->

                                                            <!--begin::Image-->
                                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px w-100 mb-4 " style="background-image: url({{ $book->path_image }});background-position:center center;">

                                                    </div>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{ route('dashboard.download.book',$book->book) }}" class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase  font-size-h3 w-100"> @lang('site.download')  <i class="fas fa-arrow-circle-down ml-3 text-danger"></i> </a>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                  @empty
                                  @include('dashboard.partials.no_informations')

                                  @endforelse
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            {{ $books->appends(request()->query())->links() }}
                                       </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">

                                    <div class="container">
                                        <div class="row d-flex justify-content-center justify-items-center">
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
                                        <div class="d-flex justify-content-center">
                                            {{ $courses->appends(request()->query())->links() }}
                                       </div>
                                </div>
                                </div>
                                </div>

                                <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel" aria-labelledby="kt_tab_pane_3">
                                    <div class="container">
                                        <div class="row d-flex justify-content-center justify-items-center">
                                            @forelse($tasks as $task)
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <!--begin::Card-->
                                                <div class="card card-custom gutter-b "data-card="true">
                                                    <div class="card-header ">
                                                        <div class="card-title">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Symbol-->
                                                                <div class="mr-5">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ $task->teacher->user->path_image }}"height="50px"width="50px" class="align-self-end rounded-circle cursor-pointer" alt=""data-toggle="tooltip" title="" data-placement="right" data-original-title="{{ $task->teacher->user->name }}">
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                              {{--   <div class="d-flex flex-column flex-grow-1">
                                                                    <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">{{ $course->teacher->user->name }}</a>
                                                                    <span class="text-muted font-weight-bold">{{ $course->created_at->format('Y/m/d') }}</span>
                                                                </div> --}}
                                                                <div class="d-flex flex-column flex-grow-1">
                                                                    <p class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">{{ $task->title }}</p>
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
                                                                            <span class="text-muted font-weight-bold">{{$task->subject->title}}</span>
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
                                                            @permission('tasks-update')
                                                            <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1" data-card-tool="reload">
                                                                <i class="ki ki-gear icon-nm"></i>
                                                            </a>
                                                            @endpermission
                                                            @permission('tasks-delete')
                                                            <button class="btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="modal" data-target="#Delete_Task{{ $task->id }}" title="Supprimer Task" >
                                                                <i class="ki ki-close icon-nm"></i>
                                                            </button>
                                                            @include('dashboard.tasks.delete')
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
                                                                @if($task->type=='writable')

                            {{--                                         <div class="bgi-no-repeat bgi-size-cover bg-white border-blue-500  d-flex justify-content-center align-items-center rounded min-h-265px" style="background-image: url({{ $course->path_image }})"></div>
                             --}}                                        <div class="d-flex flex-grow-1 bg-hover-light py-6 px-6 rounded overlay bgi-no-repeat bgi-size-cover bg-white border-blue-500  d-flex justify-content-center align-items-center rounded min-h-265px" style="background-image: url({{ $task->path_image }})">
                                                                        <div class="overlay-layer d-flex">
                                                                            <a  class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase  font-size-h3 w-50" href="{{ route('dashboard.download.task',$task->task) }}">@lang('site.download') <i class="fas fa-arrow-circle-down ml-3 text-danger"></i></a>
                            {{--                                                 <a href="javascript:;" data-toggle="modal" data-target="#svg_inline_Air-conditioningsvg" class="btn btn-sm btn-primary">Or inline SVG</a>
                             --}}                                            </div>
                                                                    </div>
                                                              @else
                                                              <div class="bg-white border-blue-500  d-flex justify-content-center align-items-center">
                                                                <video width="320" height="265" controls>
                                                                    <source src="{{URL::asset("/uploads/courses/$task->task")}}" type="video/mp4">
                                                                  Your browser does not support the video tag.
                                                              </video>
                                                            </div>

                                                                        @endif



                                                            <!--end::Image-->
                                                                <!--begin::Text-->
                                                                <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">{{ $task->description }}</p>
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
                                        <div class="d-flex justify-content-center">
                                            {{ $tasks->appends(request()->query())->links() }}
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
            {{-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="" method="post"id='delete'>
                        @csrf
                        @method('delete')
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Delete category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p text-center text-bold>Are you sure you want to delet it</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No go back</button>
                      <button type="submit" class="btn btn-danger">yes deleted</button>
                    </div>
                  </div>
                    </form>
                </div>
              </div> --}}


        @stop
        @section('scripts')

<!--begin::Page Scripts(used by this page)-->


<script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<!--end::Page Scripts-->
<script>
    console.log('imed')
</script>
<script>
    function hundeldelete(id){
        console.log(id)
     var form=document.getElementById('delete');
     url="{{ route('dashboard.subject.destroy','id') }}";
      url=url.replace('id',id);
      console.log(url);
     form.action="";

     console.log(form)
     $('#deleteModal').modal('show')
    }
</script>
@endsection



