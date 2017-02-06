@extends('layouts.master')

@section('header')
	<h2>Lista de Contactos</h2>
@stop

@section('content')
	<a href="contact/create" class="btn btn-primary">Agregar</a>
	<table class="table table-bordered table-responsive" style="margin-bottom: 10px;">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Note</th>
		</tr>
	</thead>
	<tbody>
	@foreach($contacts as $contact)
		<tr>
			<td>[{ $contact -> NAME }]</td>
			<td>[{ $contact -> PHONE }]</td>
			<td>[{ $contact -> NOTE }]</td>
			<td>
				<a href="" class="btn btn-success">Editar</a>
				<a href="" class="btn btn-danger">Borrar</a>
			</td>
		</tr>
	</table>
@stop
