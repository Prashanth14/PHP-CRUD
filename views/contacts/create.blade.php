@extends('layout')

@section('title')
Create a new car
@endsection

@section('mainContent')
	<h2>Create Contact</h2>
	<form class="form-horizontal" method="post" action="contacts/create">
		@csrf
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md"  required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="lastname">LastName</label>  
			  <div class="col-md-4">
			  <input id="name" name="lastname" type="text" placeholder="Enter LastName" class="form-control input-md" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Phone">PhoneNumber</label>  
			  <div class="col-md-4">
			  <input id="company" name="phonenum" type="tel" placeholder="Enter Phone number" class="form-control input-md" required="required">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>

			</fieldset>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		
		<div>
			<a href="/contacts/create">Show Contacts</a>
		</div>

@endsection