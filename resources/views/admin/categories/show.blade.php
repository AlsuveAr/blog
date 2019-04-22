@extends('admin.layout')

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left">Ver categoría</h3>
                        </div>
                        <div class="col s12">
                            <div class="divider"></div>
                            <br>
                            <p><strong>Nombre:</strong> {{ $category->name }}</p>
                            <p><strong>Slug:</strong>   {{ $category->slug }}</p>
                            <p><strong>Contenido:</strong>   {{ $category->body }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
