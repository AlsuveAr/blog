@extends('layout')

@section('content')
<section>
	<article>
		<div class="row">
			<div class="col s12">
				<div class="card">
					@if($post->file)
					<div class="card-image">
						<img src="{{ $post->file }}" class="responsive-img">
					</div>
					@endif
					<div class="card-content">

						<div class="row">
							<div class="col s5 offset-s1">
								<span class="right-align">{{ $post->created_at }}</span>
							</div>
							<div class="col s5">
								<a  href="{{ route('category', $post->category->slug ) }}" class="rigth btn teal waves-effect">{{ $post->category->name }}</a>
							</div>
						</div>
						<div class="row">
							<div class="col s10 offset-s1">

								<h3 >{{ $post->name }}</h3>

								<p>{{ $post->excerpt }}</p>
								<br>
								<div class="divider"></div>
								<br>
								{!! $post->body !!}
								<br>
							</div>

						</div>
						<div class="card-action">
							<div class="row" >
								<div class="col s1 offset-s1 read-more">
									
								</div>
								<div class="col s9">
									@foreach($post->tags as $tag)
										<a href="{{ route('tag', $tag->slug ) }}" class="teal-text right">
											#{{ $tag->name }} &nbsp;
										</a>&nbsp;
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
@endsection