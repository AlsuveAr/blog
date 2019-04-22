<div class="input-field">
	{{ Form::hidden('user_id', auth()->user()->id) }}
</div>
<div class="input-field">
	
	{{ Form::select('category_id', $categories, null) }}
	{{ Form::label('category_id', 'Categorías') }}
</div>
<div class="input-field">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'validate', 'id'=>'name']) }}
</div>
<div class="input-field">
	{{ Form::label('slug', 'Url amigable') }}
	{{ Form::text('slug', null, ['class' => 'validate', 'id'=>'slug']) }}
</div>
<div class="file-field input-field">
	<div class="btn">
		<span>Imagen</span>
		{{ Form::file('file',  ['class' => 'white-text']) }}
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null,['class' => 'file-path']) }}
	</div>
</div>
<div>
	{{ Form::label('status', 'Estado:') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }}
		<span>
			Publicado
		</span>
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }}
		<span>
			Borrador
		</span>
	</label>
</div>
<div >
	{{ Form::label('tags[]', 'Etiquetas') }}
	<div>
		@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('tags[]', $tag->id) }}  
			<span>
				{{ $tag->name }}
			</span>
		</label>
		&nbsp;&nbsp; 
		@endforeach
	</div>
</div>
<div class="input-field">
	{{ Form::label('excerpt', 'Extracto') }}
	{{ Form::textarea('excerpt', null, ['class' => 'materialize-textarea', 'rows'=>'2', 
		'placeholder' => 'Descripcion que saldra en la vista previa de la entrada']) }}
</div>
<div class="input-field">
	{{ Form::label('body', 'Descripción') }}
	<br>
	<br>
	{{ Form::textarea('body', null, ['class' => 'materialize-textarea', 'id'=>'body']) }}
</div>
<div>
	{{ Form::submit('Guardar', ['class' => 'btn']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#name, #slug').stringToSlug({
			callback: function(text) {
				$('#slug').val(text);
			}
		});
	});

	$(document).ready(function(){
		$('select').formSelect();
	});

	CKEDITOR.config.height = 400;
	CKEDITOR.config.width = 'auto';

	CKEDITOR.replace('body');
</script>
@endsection