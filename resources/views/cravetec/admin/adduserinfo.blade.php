@extends("cravetec.adminlayout.master")

@section("title","User Data")

@section('mainbody')
<div class="card card-custom">
 

 <div class="d-flex justify-content-center">
 	<h3 class="mt-2">
   		Enter User Details 
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

	@if (session()->has('errMsg'))
	    <div class="alert alert-danger">
	        <ul>
	            <li>{{session('errMsg')}}</li>
	        </ul>
	    </div>
	@endif
 </div>
 <!--begin::Form-->
 <form method="post" action="{{ route('adduser.store') }}">


 @csrf
  <div class="card-body">
   
   <div class="form-group row">
    <label  class="col-2 col-form-label">Name</label>
    <div class="col-10">
     <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter Name" id="name"/ value="{{ old('name') }}" autofocus>

     @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

    </div>
   </div>

   

   <div class="form-group row">
    <label for="example-email-input" class="col-2 col-form-label">Email</label>
    <div class="col-10">
     <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="abc@example.com" id="email" name="email" value="{{ old('email') }}" />

     @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

    </div>
   </div>

   
   <div class="form-group row">
    <label for="example-tel-input" class="col-2 col-form-label">Mobile</label>
    <div class="col-10">
     <input class="form-control @error('mobile') is-invalid @enderror" type="tel" placeholder="034121****3" id="Mobile" name="mobile" value="{{ old('mobile') }}"/>

     @error('mobile')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

    </div>
   </div>

   <div class="form-group row">
    <label for="example-tel-input" class="col-2 col-form-label">Age</label>
    <div class="col-10">
     <input class="form-control @error('age') is-invalid @enderror" type="number" min="0" placeholder="18" id="age" name="age" value="{{ old('age') }}"/>

     @error('age')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

    </div>
   </div>

   <div class="form-group row">
    <label for="example-tel-input" class="col-2 col-form-label">Address</label>
    <div class="col-10">
     <input class="form-control @error('address') is-invalid @enderror" type="text"  placeholder="street 2, block y Sargodha" id="address" name="address" value="{{ old('address') }}" />

     @error('address')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

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
</div>
@endsection