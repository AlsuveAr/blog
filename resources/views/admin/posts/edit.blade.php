@extends('admin.layout')    

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left header">Editar entrada</h3>
                       </div>
                        <div class="col s12">
                            
                        {!! Form::model($post, ['route' => ['posts.update', $post->id], 
                            'method' => 'PUT', 'files' => true]) !!}
                    	   @include('admin.posts.partials.form')
                        {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
