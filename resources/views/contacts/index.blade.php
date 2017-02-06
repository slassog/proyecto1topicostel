@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contactos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Crear un nuevo contacto</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Nota</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($contacts as $key => $contact)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $contact->NAME }}</td>
        <td>{{ $contact->PHONE }}</td>
        <td>{{ $contact->NOTE }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Mostrar</a>
            <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $contact->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $contacts->render() !!}

@endsection