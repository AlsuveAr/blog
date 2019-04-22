@extends('admin.layout')

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left header">Crear categoría</h3>
                        </div>
                        <div class="col s12">
                            <div class="divider"></div>
                            <br>
                            {!! Form::open(['route' => 'categories.store']) !!}
                            	@include('admin.categories.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
