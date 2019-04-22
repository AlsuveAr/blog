@extends('admin.layout')

@section('content')
<div class="">
    <div class="row">
        <div class="col s12">
            <div class="card">

                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="left">Ver entrada</h3>
                        </div>
                        <div class="col s12">
                            <div class="divider"></div>
                            <br>
                            <p><strong>Nombre:</strong> {{ $post->name }}</p>
                            <p><strong>Slug:</strong>   {{ $post->slug }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
