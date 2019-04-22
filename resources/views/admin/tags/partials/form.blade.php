<div class="input-field">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'validate', 'id'=>'name']) }}
</div>
<div class="input-field">
	{{ Form::label('slug', 'Url amigable') }}
	{{ Form::text('slug', null, ['class' => 'validate', 'id'=>'slug']) }}
	
	
</div>
<div>
	{{ Form::submit('Guardar', ['class' => 'btn']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#name, #slug').stringToSlug({
			callback: function(text) {
				$('#slug').val(text);
			}
		});
	});
</script>
@endsection