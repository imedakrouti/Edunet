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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.students')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.update') @lang('site.details') @lang('site.student')</span>

                    </div>
                    <!--end::Search Form-->
                    <!--begin::Group Actions-->
                    <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                        <div class="text-dark-50 font-weight-bold">
                        <span id="kt_subheader_group_selected_rows">23</span>Selected:</div>
                        <div class="d-flex ml-6">
                            <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                                <button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle" data-toggle="dropdown">Update Status</button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                    <ul class="navi navi-hover pt-3 pb-4">
                                        <li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">Change status to:</li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                                                <span class="navi-text">
                                                    <span class="label label-light-success label-inline font-weight-bold">Approved</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                                                <span class="navi-text">
                                                    <span class="label label-light-danger label-inline font-weight-bold">Rejected</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                                                <span class="navi-text">
                                                    <span class="label label-light-warning label-inline font-weight-bold">Pending</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                                                <span class="navi-text">
                                                    <span class="label label-light-info label-inline font-weight-bold">On Hold</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-light-success font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
                            <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_delete_all">Delete All</button>
                        </div>
                    </div>
                    <!--end::Group Actions-->
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

        <div class="card card-custom gutter-b ">
            <div class="card-header ">
             <div class="card-title">
              <h3 class="card-label">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-xl svg-icon-warning">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </span>

                <span class="text-dark mx-3">@lang('site.update') @lang('site.student') </span>

              </h3>
             </div>
            </div>
            <div class="card-body mx-auto col-md-10 ">
                <form method="POST" action="{{ route('dashboard.student.update',$student->id) }}"enctype="multipart/form-data">
                    @csrf
                    @method('Put')
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.first_name')</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"  placeholder="@lang('site.first_name')" value="{{ $student->user->first_name }}">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.last_name')</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror  form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" name="last_name" placeholder="@lang('site.last_name')" value="{{ $student->user->first_name }}">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                        <div class="form-group ">
                            <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.gender')</label>
                            <div class="col-9 col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-outline radio-outline-2x radio-primary">
                                        <input type="radio" name="gender" @error('gender') is-invalid @enderror checked="checked" value="male" {{$student->gender== 'male' ? 'checked' : '' }}/>
                                        <span></span>
                                        @lang('site.male')
                                    </label>
                                    <label class="radio radio-outline radio-outline-2x radio-primary">
                                        <input type="radio" name="gender" @error('gender') is-invalid @enderror value="female" {{  $student->gender== 'female' ? 'checked' : '' }}/>
                                        <span></span>
                                        @lang('site.female')
                                    </label>

                                </div>

                            </div>
                        </div>

                    <div class="form-group ">
                        <label class="font-size-h6 font-weight-bolder text-dark col-xl-3 col-lg-3 col-form-label">Phone</label>
                        <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"  placeholder=" Phone Number" value="{{ $student->phone }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark d-block">@lang('site.image')</label>
                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                            <div class="image-input-wrapper" style="background-image: url({{URL::asset($student->user->path_image)}})"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="image" accept=".png, .jpg, .jpeg">
                               {{--  <input type="hidden" name="profile_avatar_remove"> --}}
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.address')</label>
                        <input type="text" name="address" class="form-control @error('addresse') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Adresse" value="{{ $student->address }}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.email')</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Email" value="{{$student->user->email }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row mb-0">

                            <button type="submit" class="btn btn-warning btn-shadow-hover font-weight-bolder px-5 py-3 mx-auto">
                                <i class="fa fa-edit"></i>
                                @lang('site.update')
                            </button>

                    </div>
                </form>


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



