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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.books')</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">@lang('site.list') @lang('site.books')</span>

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

       {{--  {{$bookss->courses_count}}
        {{$books->teachers_count}} --}}
     {{--    @foreach($books as $book)
        <h1>{{$book->title}}</h1>
        <a href="{{ route('dashboard.download.book',$book->book) }}"> Download  </a>

        @endforeach --}}
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title ">
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
                    @lang('site.list') @lang('site.books')   </h3>
                    <div class="quick-search quick-search-inline w-auto w-lg-300px mx-auto" id="kt_quick_search_inline">
                        <!--begin::Form-->
                        <form  action="{{ route('dashboard.book.index')}}"method="get" class="quick-search-form">

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
                    @permission('books-create')
                    <div class="card-toolbar">

                        <a href="{{ route('dashboard.book.create') }}" class="btn btn-success font-weight-bolder font-size-sm">
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
                            </span>@lang('site.add') @lang('site.book')</a>
                </div>
                @endpermission
            </div>
            <div class="card-body  bg-secondary d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row  d-flex justify-content-center align-items-center">
                @forelse($books as $book)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b "data-card="true">
                        <div class="card-header ">
                            <div class="card-title">
                                <a href="{{ route('dashboard.welcome') }}" class="card-label  font-weight-bolder text-dark-75 text-hover-primary">{{ $book->title }}</a>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                    <i class="ki ki-arrow-down icon-nm"></i>
                                </a>
                                @permission('books-update')
                                <a href="{{route('dashboard.book.edit',$book->id)}}" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1" >
                                    <i class="ki ki-gear icon-nm"></i>
                                </a>
                                @endpermission
                                @permission('books-delete')
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



