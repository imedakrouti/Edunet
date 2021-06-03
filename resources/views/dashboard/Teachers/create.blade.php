@extends('layouts.Dashboard.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="{{asset('admin\assets/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
<style>
    .select2-container--default .select2-selection--multiple{
        background-color: #F3F6F9 !important;
        border-color: #F3F6F9 !important;
        color: #3F4254 !important;
        border-radius: 0.85rem !important;
        height: auto !important;
        padding: 1.25rem !important;
        font-weight: 400 !important;
    line-height: 1.5 !important;
    }
    .select2-container .select2-selection--multiple {
    display: block;
    min-height: 55px !important;
    }
    .select2-container--default .select2-search--inline .select2-search__field{
        width:100% !important;
        font-size: 1.175rem !important;
    }


.select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-selection__choice {
    background: none !important;
    }
</style>

@stop
@section('content')


        <!--begin::Subheader-->
        @section('Subheader')
        <div class="subheader py-2 py-lg-4" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.teachers')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.enter_details') @lang('site.teacher') </span>

                    </div>
                    <!--end::Search Form-->
                    <!--begin::Group Actions-->
                  {{--   <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
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
                    </div> --}}
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
                    <span class="svg-icon svg-icon-xl svg-icon-danger">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </span>

                <span class="text-dark mx-3">@lang('site.add') @lang('site.teacher') </span>

              </h3>
             </div>
            </div>
            <div class="card-body mx-auto col-md-10 ">
                <form method="POST" action="{{ route('dashboard.teacher.store') }}"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.first_name')</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"  placeholder="@lang('site.first_name')" value="{{ old('first_name') }}">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.last_name')</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror  form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" name="last_name" placeholder="@lang('site.last_name')" value="{{ old('last_name') }}">
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
                                        <input type="radio" name="gender" @error('gender') is-invalid @enderror checked="checked" value="male" {{ (old('gender') == 'male') ? 'checked' : '' }}/>
                                        <span></span>
                                        @lang('site.male')
                                    </label>
                                    <label class="radio radio-outline radio-outline-2x radio-primary">
                                        <input type="radio" name="gender" @error('gender') is-invalid @enderror value="female" {{ (old('gender') == 'female') ? 'checked' : '' }}/>
                                        <span></span>
                                        @lang('site.female')
                                    </label>

                                </div>

                            </div>
                        </div>

                    <div class="form-group ">
                        <label class="font-size-h6 font-weight-bolder text-dark col-xl-3 col-lg-3 col-form-label">@lang('site.phone')</label>
                        <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"  placeholder="@lang('site.phone')" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark d-block">@lang('site.image')</label>
                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                            <div class="image-input-wrapper" style="background-image: url({{URL::asset('admin/assets/media/users/100_3.jpg')}})"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="image" accept=".png, .jpg, .jpeg"value="{{ old('image') }}">
                                <input type="hidden" name="profile_avatar_remove">
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.address')</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="@lang('site.address')" value="{{ old('address') }}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.email')</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="@lang('site.email')" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.password')</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror  form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="@lang('site.password')" value="">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.password_confirmation')</label>
                        <input type="password" name="password_confirmation"class="form-control @error('password_confirmation') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="@lang('site.password_confirmation')" value="">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">

                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for=""> <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.subjects')</label></label>
                      <select name="matieres[]" class="form-control select @error('matieres') is-invalid @enderror"  multiple>
                        @foreach ($matieres as $matiere)
                        <option value="{{ $matiere->id}}">{{ $matiere->title }}</option>
                    @endforeach
                    </select>
                    @error('matieres')
                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group row mb-0">

                            <button type="submit" class="btn btn-success btn-shadow-hover font-weight-bolder px-5 py-3 mx-auto">
                                <i class="fa fa-plus"></i>
                                @lang('site.add')
                            </button>

                    </div>

                </form>


            </div>
           </div>

@stop
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<!--end::Page Scripts-->
<!--end::Page Scripts-->
<script>
    console.log('imed')
</script>
@endsection



