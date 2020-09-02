@extends('layout')

@section('mainContent')
	<h1>Show Contact</h1>
	<div >
		<p><strong>{{$contact->name}}</strong></p>
        <p><strong>{{$contact->lastname}}</strong></p>
        <p><strong>{{$contact->phonenum}}</strong></p>
	</div>
	
	<a href="{{$contact->id}}/edit">Edit Conatct</a>
@endsection