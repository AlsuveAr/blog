@extends('admin.layout')

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left header">Categorías</h3>
                            <br>
                            <br>
                            <a href="{{ route('categories.create') }}" class="btn waves-effect waves-light right">Crear categoría</a>

                            <table class="highlight">
                                <thead>
                                    <tr>
                                        <th width="50px">ID</th>
                                        <th>Nombre</th>
                                        <th colspan="4">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td  width="20px">
                                            <a href="{{ route('categories.show', $category->id) }}" class="btn">Ver</a>
                                        </td>
                                        <td  width="20px">
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn">editar</a>
                                        </td>
                                        <td  width="20px">
                                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                                {{ Form::submit('Eliminar', ['class' => 'btn red']) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col s12 center-align">
                            {{ $categories->render() }}
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
