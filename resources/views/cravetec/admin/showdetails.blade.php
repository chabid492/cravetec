
@extends("cravetec.adminlayout.master")

@section("title","Show Details")


@section('mainbody')

						<div class="d-flex flex-column-fluid mt-3">
							<!--begin::Container-->
							<div class="container">
								<div class="d-flex justify-content-center">
								 	@if (session()->has('success'))
									    <div class="alert alert-success" style=" margin: 0;">
									        <ul>
									            <li>{{session('success')}}</li>
									        </ul>
									    </div>
									@endif

									@if (session()->has('errors'))
									    <div class="alert alert-danger">
									        <ul>
									            <li>{{session('errors')}}</li>
									        </ul>
									    </div>
									@endif
								 </div>
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap py-5">
										<div class="card-title">
											<h3 class="card-label">User Details
											</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											


											<!--begin::Button-->
											<a href="{{ route('adduser.create') }}" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>New Record</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
											<thead>
												<tr>
													<th>Record ID</th>
													<th>Name</th>
													<th>Email</th>
													<th>Mobile</th>
													<th>Age</th>
													<th>Address</th>
													<th>Actions</th>
												</tr>
											</thead>

											<tbody>
												@foreach($results as $result)
												<tr>
													

													<td>{{ $result->id }}</td>
													<td>
														<a href="{{ url('/adduser/'.$result->id) }}"  title="">
															{{ $result->name }}
														</a>
													</td>
													<td>{{ $result->email }}</td>
													<td>{{ $result->mobile }}</td>
													<td>{{ $result->age }}</td>
													<td>{{ $result->address }}</td>

													<td nowrap="nowrap">

														<div class="d-flex justify-content-around">
															<a href="{{ url('/adduser/'.$result->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>

															<form action="{{ route('adduser.destroy', $result->id) }}" method=		"POST">

															    @csrf
															    @method('DELETE')

															    <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
															    
															</form>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->



							<script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>

							<script src="{{ URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>

							<script src="{{ URL::asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>

						
							<script src="{{ URL::asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5') }}"></script>
							
							<script src="{{ URL::asset('assets/js/pages/crud/datatables/advanced/column-rendering.js?v=7.0.5') }}"></script>

						</div>
						<!--end::Entry-->
@endsection