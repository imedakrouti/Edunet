<div id="kt_header" class="header header-fixed" style="background-image: url({{URL::asset('admin/assets/media/bg/bg-2.jpg')}})">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
									<!--begin::Header Nav-->
									<ul class="menu-nav">
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active" data-menu-toggle="click" aria-haspopup="true">
											{{-- <a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Pages</span>
												<i class="menu-arrow"></i>
											</a> --}}
											<a href="{{route('dashboard.welcome')}}" class="mr-20">
                                                <img alt="Logo" src="{{asset('admin/assets/')}}/media/logos/edukinib.png"width="150px" class="logo-default max-h-35px" />
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">

											</div>
										</li>


									</ul>

									<!--end::Header Nav-->
								</div>

								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<!--begin::Search-->
							<div class="topbar-item mr-3 my-4 w-100 w-lg-auto justify-content-center">
								<div class="quick-search quick-search-inline w-auto w-lg-400px" id="kt_quick_search_inline">
									<!--begin::Form-->
									<form method="get" class="quick-search-form">
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
											<input type="text" class="form-control h-40px" placeholder="@lang('site.search')...">
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
										<div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
									</div>
									<!--end::Dropdown-->
								</div>
							</div>
							<!--end::Search-->
							<div class="topbar">

								<!--begin::Notifications-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-warning">
											<span class="svg-icon svg-icon-xl svg-icon-warning">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<span class="pulse-ring"></span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<form>
											<!--begin::Header-->
											<div class="d-flex flex-column  bgi-size-cover bgi-no-repeat rounded-top">
												<!--begin::Title-->
												<div class="d-flex flex-column py-7 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{URL::asset('admin/assets/media/misc/bg-1.jpg')}})">

												<h4 class="d-flex flex-center rounded-top">
													<span class="text-white">User Notifications</span>
													<span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
												</h4>
											</div>
												<!--end::Title-->
												<!--begin::Tabs-->
													<!--begin::Tabpane-->
													<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
														<!--begin::Nav-->
														<div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-line-chart text-success"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New report has been received</div>
																		<div class="text-muted">23 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-paper-plane text-danger"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">Finance report has been generated</div>
																		<div class="text-muted">25 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-user flaticon2-line- text-success"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New order has been received</div>
																		<div class="text-muted">2 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-pin text-primary"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New customer is registered</div>
																		<div class="text-muted">3 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-sms text-danger"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">Application has been approved</div>
																		<div class="text-muted">3 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-pie-chart-3 text-warning"></i>
																	</div>
																	<div class="navinavinavi-text">
																		<div class="font-weight-bold">New file has been uploaded</div>
																		<div class="text-muted">5 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon-pie-chart-1 text-info"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New user feedback received</div>
																		<div class="text-muted">8 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-settings text-success"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">System reboot has been successfully completed</div>
																		<div class="text-muted">12 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon-safe-shield-protection text-primary"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New order has been placed</div>
																		<div class="text-muted">15 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-notification text-primary"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">Company meeting canceled</div>
																		<div class="text-muted">19 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-fax text-success"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New report has been received</div>
																		<div class="text-muted">23 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon-download-1 text-danger"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">Finance report has been generated</div>
																		<div class="text-muted">25 hrs ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon-security text-warning"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New customer comment recieved</div>
																		<div class="text-muted">2 days ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="navi-item">
																<div class="navi-link">
																	<div class="navi-icon mr-2">
																		<i class="flaticon2-analytics-1 text-success"></i>
																	</div>
																	<div class="navi-text">
																		<div class="font-weight-bold">New customer is registered</div>
																		<div class="text-muted">3 days ago</div>
																	</div>
																</div>
															</a>
															<!--end::Item-->
														</div>
														<!--end::Nav-->
													</div>
													<!--end::Tabpane-->
												<!--end::Tabs-->
											</div>
											<!--end::Header-->
											<!--begin::Content-->
											<div class="tab-content">
												<!--begin::Tabpane-->


												<!--begin::Tabpane-->
												<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
													<!--begin::Nav-->
													<div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
													<br />No new notifications.</div>
													<!--end::Nav-->
												</div>
												<!--end::Tabpane-->
											</div>
											<!--end::Content-->
										</form>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Notifications-->
								<!--begin::Quick Actions-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
														<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
														<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
														<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<!--begin:Header-->
										<div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('{{asset('admin/assets/media/misc/bg-1.jpg')}}')">
											<h4 class="text-white font-weight-bold">قائمه الخيارات</h4>
{{-- 											<span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
 --}}										</div>
										<!--end:Header-->
										<!--begin:Nav-->
										<div class="row row-paddingless">
											<!--begin:Item-->
											<div class="col-6">
												<a href="{{ route('dashboard.book.index') }}" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg-->
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
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">@lang('site.books')</span>
													<span class="d-block text-dark-50 font-size-lg">@lang('site.list') @lang('site.books')</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="{{ route('dashboard.course.index') }}" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                                                                <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">@lang('site.courses')</span>
													<span class="d-block text-dark-50 font-size-lg">@lang('site.list') @lang('site.courses')</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="{{ route('dashboard.task.index') }}" class="d-block py-10 px-5 text-center bg-hover-light border-right">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"></path>
                                                                <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">@lang('site.tasks')</span>
													<span class="d-block text-dark-50 font-size-lg">@lang('site.task_description')</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="{{ route('dashboard.concour.index') }}" class="d-block py-10 px-5 text-center bg-hover-light">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
                                                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
                                                            </g>
                                                        </svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">@lang('site.concours')</span>
													<span class="d-block text-dark-50 font-size-lg">@lang('site.concour_description')</span>
												</a>
											</div>
											<!--end:Item-->
										</div>
										<!--end:Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Quick Actions-->
								<!--begin::Cart-->

								<!--end::Cart-->
								<!--begin::Quick panel-->

								<!--end::Quick panel-->
								<!--begin::Chat-->

								<!--end::Chat-->
								<!--begin::Languages-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
											<img class="h-20px w-20px rounded-sm" src="{{asset('admin/assets/media/svg/flags/049-tunisia.svg')}}" alt="" />
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<!--begin::Nav-->
										<ul class="navi navi-hover py-4">
											<!--begin::Item-->
                                            <li class="navi-item active">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{asset('admin/assets//media/svg/flags/049-tunisia.svg')}}" alt="" />
													</span>
													<span class="navi-text">العربية</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{asset('admin/assets/media/svg/flags/226-united-states.svg')}}" alt="" />
													</span>
													<span class="navi-text">الإنجليزية</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->

											<!--end::Item-->
											<!--begin::Item-->

											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{asset('admin/assets/media/svg/flags/195-france.svg')}}" alt="" />
													</span>
													<span class="navi-text">الفرنسية</span>
												</a>
											</li>
											<!--end::Item-->
										</ul>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Languages-->
								<!--begin::User-->
                               @include('layouts.dashboard.userpanel')
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
