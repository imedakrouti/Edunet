@extends('layouts.Dashboard.app')
@section('content')
   <!--begin::Subheader-->
   @section('Subheader')
   <div class="subheader py-2 py-lg-4" id="kt_subheader">
       <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
           <!--begin::Details-->
           <div class="d-flex align-items-center flex-wrap mr-2">
               <!--begin::Title-->
               <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.dashboard')</h5>
               <!--end::Title-->
               <!--begin::Separator-->
             {{--   <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
               <!--end::Separator-->
               <!--begin::Search Form-->
               <div class="d-flex align-items-center" id="kt_subheader_search">
                   <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Liste matieres</span>

               </div> --}}

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
<div class="container">
    <div class="row">
        @role('super_admin')
        <div class="col-xl-4">
            <!--begin::Stats Widget 17-->
            <a href="{{ route('dashboard.teacher.index') }}" class="card card-custom bg-info bg-hover-state-info card-stretch card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <object data="{{ asset('admin/assets/media/svg/avatars/teacher.svg') }}" width="48px" height="48px"> </object>
                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-info font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.teachers')</div>
                    <div class="font-weight-bold text-inverse-info font-size-h3">@lang('site.teacher_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 17-->
        </div>
        <div class="col-xl-4">
            <!--begin::Stats Widget 18-->
            <a href="{{ route('dashboard.student.index') }}" class="card card-custom bg-dark bg-hover-state-dark card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                        <object data="{{ asset('admin/assets/media/svg/avatars/student.svg') }}" width="48px" height="48px"> </object>

                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-info font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.students')</div>
                    <div class="font-weight-bold text-inverse-info font-size-h3">@lang('site.student_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 18-->
        </div>
        @endrole
        <div class="col-xl-4">
            <!--begin::Stats Widget 14-->
            <a href="{{ route('dashboard.subject.index') }}" class="card card-custom bg-warning bg-hover-state-warning card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.subjects')</div>
                    <div class="font-weight-bold text-inverse-primary font-size-h3 ">@lang('site.subject_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 14-->
        </div>
        <div class="col-xl-4">
            <!--begin::Stats Widget 13-->
            <a href="{{ route('dashboard.book.index') }}" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"></path>
                                <polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19"></polygon>
                                <polygon fill="#000000" points="11 19 15 14 19 19"></polygon>
                                <path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.books')</div>
                    <div class="font-weight-bold text-inverse-danger font-size-h3">@lang('site.book_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 13-->
        </div>


        <div class="col-xl-4">
            <!--begin::Stats Widget 16-->
            <a href="{{ route('dashboard.course.index') }}" class="card card-custom bg-primary bg-hover-state-primary card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">

                    <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                                <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.courses')</div>
                    <div class="font-weight-bold text-inverse-danger font-size-h4">@lang('site.course_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 16-->
        </div>
        <div class="col-xl-4">
            <!--begin::Stats Widget 15-->
            <a href="{{ route('dashboard.task.index') }}" class="card card-custom bg-success bg-hover-state-success card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"></path>
                                <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.tasks')</div>
                    <div class="font-weight-bold text-inverse-success font-size-h4">@lang('site.task_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 15-->
        </div>
        <div class="col-xl-4">
            <!--begin::Stats Widget 15-->
            <a href="{{ route('dashboard.concour.index') }}" class="card card-custom bg-dark bg-hover-state-dark card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white">
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
                        <!--end::Svg Icon-->
                    </span>
                    <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">@lang('site.concours')</div>
                    <div class="font-weight-bold text-inverse-success font-size-h4">@lang('site.concour_description')</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Stats Widget 15-->
        </div>
    </div>
</div>
@stop
