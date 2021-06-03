@extends('layouts.Dashboard.app')
@section('styles')
<link href="{{asset('admin\assets/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
<style>
    /*  .custom-file-input{
         display: none !important;
         background-color: #F3F6F9 !important;
         border-color: #F3F6F9 !important;
         color: #3F4254 !important;
         border-radius: 0.85rem !important;
         height: auto !important;
         padding: 1.25rem !important;
         font-weight: 400 !important;
     line-height: 1.5 !important;
     }
     #input[type=file]{
         display: none !important;
         background-color: #F3F6F9 !important;
         border-color: #F3F6F9 !important;
         color: #3F4254 !important;
         border-radius: 0.85rem !important;
         height: auto !important;
         padding: 1.25rem !important;
         font-weight: 400 !important;
     line-height: 1.5 !important;
     } */
     .custom-file-label::after{
         display:none !important
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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.book')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.enter_details') @lang('site.book')</span>

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
                <span class="svg-icon menu-icon svg-icon-primary mr-2">

                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
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

                    <!--end::Svg Icon-->
                </span>
                @lang('site.add') @lang('site.book')

              </h3>
             </div>
            </div>
            <div class="card-body mx-auto col-md-10 ">
                <form method="POST" action="{{ route('dashboard.book.store') }}"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark">@lang('site.title')</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"  placeholder="@lang('site.title')" value="{{ old('title') }}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group  ">
                        <label class="font-size-h6 font-weight-bolder text-dark"> @lang('site.description') </label>
                        <textarea name="description"class="form-control @error('description') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"  placeholder="@lang('site.description')" value="" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 96px;resize:none">{{ old('description') }}</textarea>
                        @error('description')
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
                                <input type="file" name="image" accept=".png, .jpg, .jpeg, .gif" value=" {{old('image') }}">
                                <input type="hidden" name="profile_avatar_remove">
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark d-block">@lang('site.subject')</label>
							<select class="form-control border-0 form-control-solid text-muted font-size-lg font-weight-bolder pl-5 min-h-50px" name="subject_id" id="exampleSelects">
							<option>@lang('site.select') @lang('site.subject')</option>
                            @foreach($subjects as $subject)
                                <option value="{{$subject->id}}"{{old('subject_id')==$subject->id ? 'selected' : ''}}>{{$subject->title}}</option>
                            @endforeach
							</select>
							</div>
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark"> @lang('site.book') </label>
                        <div class="custom-file">
                            <input type="file" name="book" class="custom-file-input cursor-pointer @error('book') is-invalid @enderror form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" id="chooseFile">
                            <label class="custom-file-label cursor-pointer form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" for="chooseFile">@lang('site.select') @lang('site.book')</label>
                             @error('book')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>

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
<script src="{{ asset('admin/assets/js/pages/crud/file-upload/dropzonejs.js') }}"></script>
<!--end::Page Scripts-->
<!--end::Page Scripts-->
<script>
    console.log('imed')
</script>
@endsection



