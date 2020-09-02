@extends('layout')

@section('title')
List Contacts
@endsection
@section('mainContent')
	<h1>List Contact</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		@foreach($contacts as $contact)
		<tr>
			<td><a href="contacts/{{$contact->id}}">{{$contact->name}}</a> </td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>
	<a href="contacts/create">Add New Contact</a>
@endsection