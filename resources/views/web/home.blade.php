@extends('layout')

@section('content')
<section>
@foreach($posts as $post)
	<article>
		<div class="row">
			<div class="col s12">
				<div class="card">
					@if($post->file)
					<div class="card-image">
						<img src="{{ $post->file }}" class="" width="auto" height="400px" >
					</div>
					@endif
					<div class="card-content">

						<div class="row">
							<div class="col s5 offset-s1">
								<span class="right-align">{{ $post->created_at }}</span>
							</div>
							<div class="col s6">
								<a  href="{{ route('category', $post->category->slug ) }}" class="rigth btn teal waves-effect">{{ $post->category->name }}</a>
							</div>
						</div>
						<div class="row">
							<div class="col s10 offset-s1">

								<h3 >{{ $post->name }}</h3>

								<p>{{ $post->excerpt }}</p>
							</div>

						</div>
					</div>
					<div class="card-action">
						<div class="row" >
							<div class="col s4 offset-s1 read-more">
								<a href="{{ route('post', $post->slug) }}" class="teal-text left-align">Leer mas</a>
							</div>
							<div class="col s7">
								@foreach($post->tags as $tag)
									<a href="{{ route('tag', $tag->slug ) }}" class="teal-text right">
										#{{ $tag->name }} &nbsp;
									</a>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
@endforeach
</section>
<div class="row">
	<div class="col m6 offset-m3">
		<div class="pagination">
			{{$posts->render()}}
		</div>
	</div>
</div>
@endsection