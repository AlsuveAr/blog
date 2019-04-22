@extends('admin.layout')

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left header">Etiquetas</h3>
                            <br>
                            <br>
                            <a href="{{ route('tags.create') }}" class="btn waves-effect waves-light right">Crear etiqueta</a>

                            <table class="highlight">
                                <thead>
                                    <tr>
                                        <th width="50px">ID</th>
                                        <th>Nombre</th>
                                        <th colspan="4">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td  width="20px">
                                            <a href="{{ route('tags.show', $tag->id) }}" class="btn">Ver</a>
                                        </td>
                                        <td  width="20px">
                                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn">editar</a>
                                        </td>
                                        <td  width="20px">
                                            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                                {{ Form::submit('Eliminar', ['class' => 'btn red']) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col s12 center-align">
                            {{ $tags->render() }}
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
