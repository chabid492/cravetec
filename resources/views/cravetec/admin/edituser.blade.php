@extends("cravetec.adminlayout.master")

@section("title","Edit")

@section('mainbody')
<div class="card card-custom">
 

 <div class="d-flex justify-content-center">
 	<h3 class="mt-2">
   		Update User Details 
  	</h3>
 </div>

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
 <!--begin::Form-->
 @foreach($results as $result)
 <form method="post" action="{{ url('/adduser/'.$result['id']) }}">

  @method('PUT')
 @csrf
  <div class="card-body">
   
   <div class="form-group row">
    <label  class="col-2 col-form-label">Name</label>
    <div class="col-10">
     <input class="form-control" type="text" value="{{ $result->name }}" name="name" placeholder="Enter Name" id="name"/>
    </div>
   </div>

   

   <div class="form-group row">
    <label for="example-email-input" class="col-2 col-form-label">Email</label>
    <div class="col-10">
     <input class="form-control" type="email" value="{{ $result->email }}" placeholder="abc@example.com" id="email" name="email" />
    </div>
   </div>

   
   <div class="form-group row">
    <label for="example-tel-input" class="col-2 col-form-label">Mobile</label>
    <div class="col-10">
     <input class="form-control" type="tel" value="{{ $result->mobile }}" placeholder="034121****3" id="Mobile" name="mobile" />
    </div>
   </div>

   <div class="form-group row">
    <label for="example-tel-input" class="col-2 col-form-label">Age</label>
    <div class="col-10">
     <input class="form-control" type="number" value="{{ $result->age }}" min="0" placeholder="18" id="age" name="age" />
    </div>
   </div>

   <div class="form-group row">
    <label for="example-tel-input" class="col-2 col-form-label">Address</label>
    <div class="col-10">
     <input class="form-control" type="text" value="{{ $result->address }}"  placeholder="street 2, block y Sargodha" id="address" name="address" />
    </div>
   </div>

   {{-- <div class="form-group row">
    <label for="example-password-input" class="col-2 col-form-label">Password</label>
    <div class="col-10">
     <input class="form-control" type="password" placeholder="hunter2" id="example-password-input"/>
    </div>
   </div> --}}

  

  </div>
  <div class="card-footer">
   <div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
     <button type="submit" class="btn btn-success mr-2">Submit</button>
     <a href="{{ route('adduser.index') }}" class="btn btn-secondary" title="">Cancel</a>
     
    </div>
   </div>
  </div>
 </form>

 @endforeach

</div>
@endsection