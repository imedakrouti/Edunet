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
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title ">
                    <span class="svg-icon svg-icon-primary mr-2">

                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>

                        <!--end::Svg Icon-->
                    </span>
                    @lang('site.list') @lang('site.subjects')   </h3>
                    <div class="quick-search quick-search-inline w-auto w-lg-300px mx-auto" id="kt_quick_search_inline">
                        <!--begin::Form-->
                        <form  action="{{ route('dashboard.subject.index')}}"method="get" class="quick-search-form">

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
                    @permission('subjects-create')
                    <div class="card-toolbar">

                        <a href="{{ route('dashboard.subject.create') }}" class="btn btn-success font-weight-bolder font-size-sm">
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
                            </span>@lang('site.add') @lang('site.subject')</a>
                </div>
                @endpermission
            </div>
            <div class="card-body bg-secondary d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                @forelse($subjects as $subject)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b "data-card="true">

                        <div class="card-header ">
                            <div class="card-title">
                                <a href="{{ route('dashboard.subject.show',$subject->id) }}" class="card-label  font-weight-bolder text-dark-75 text-hover-primary">{{ $subject->title }}</a>
                            </div>
                            <div class="card-toolbar">

                                <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                    <i class="ki ki-arrow-down icon-nm"></i>
                                </a>
                                @permission('subjects-update')
                                <a href="{{route('dashboard.subject.edit',$subject->id)}}" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1">
                                    <i class="ki ki-gear icon-nm"></i>
                                </a>
                                @endpermission
                                @permission('subjects-delete')
                                <button class="btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="modal" data-target="#Delete_Matiere{{ $subject->id }}" title="Supprimer Matiere">
                                    <i class="ki ki-close icon-nm"></i>
                                </button>
                                @endpermission
                            </div>
                        </div>
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Wrapper-->
                            <div class="d-flex justify-content-between flex-column h-100">
                                <!--begin::Container-->
                                <div class="h-100">
                                    <!--begin::Header-->
                                    <div class="d-flex flex-column flex-center">
                                        <!--begin::Image-->
                                        <div class="bgi-no-repeat rounded w-100 mb-4" style="background-image: url({{ $subject->path_image }});background-position:center center/cover;height:200px"></div>
                                        <!--end::Image-->
                                        <!--begin::Title-->
                                        {{--                                         <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{ $subject->title }}</a>--}}                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-3">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <i class="fas fa-folder text-danger"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1 text-center">
                                                <a href="{{ route('dashboard.subject-book',$subject->id) }}" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">@lang('site.books')</a>

                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->.
                                            <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">{{ $subject->books->count() }}</span>
                                            <!--end::label-->
                                        </div>
                                        <!--end::Item-->
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
                                                <a href="{{ route('dashboard.subject-task',$subject->id) }}" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">@lang('site.tasks')</a>
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <span class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">{{ $subject->tasks->count() }}</span>
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
                                                <a href="{{ route('dashboard.subject-course',$subject->id) }}" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder"> @lang('site.courses')</a>
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <span class="font-weight-bolder label label-xl label-light-primary label-inline py-5 min-w-45px">{{ $subject->courses->count() }}</span>
                                            <!--end::label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--eng::Container-->
                                <!--begin::Footer-->

                                <!--end::Footer-->
                            </div>

                            <!--end::Wrapper-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                @include('dashboard.subjects.delete')
                @empty
                @include('dashboard.partials.no_informations')
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $subjects->appends(request()->query())->links() }}
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



