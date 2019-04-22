@extends('admin.layout')

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left header">Lista de mis entradas</h3>
                            <br>
                            <br>
                            <a href="{{ route('posts.create') }}" class="btn waves-effect waves-light right">Crear entrada</a>

                            <table class="highlight">
                                <thead>
                                    <tr>
                                        <th width="50px">ID</th>
                                        <th>Nombre</th>
                                        <th colspan="4">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td  width="20px">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn">Ver</a>
                                        </td>
                                        <td  width="20px">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn">editar</a>
                                        </td>
                                        <td  width="20px">
                                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                                {{ Form::submit('Eliminar', ['class' => 'btn red']) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col s12 center-align">
                            {{ $posts->render() }}
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
