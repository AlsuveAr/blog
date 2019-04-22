@extends('layout')

@section('content')
<section>
	<article>
		<div class="row">
			<div class="col s12">
				<div class="card card-panel">
					<div class="card-content">
						<div class="row">
							<div class="col s10 offset-s1">

								<h3 >Contactanos </h3>
								<p>Nam in maximus arcu, ac aliquam tellus. Donec vestibulum ipsum nunc, at placerat ante posuere non. Integer at dui a lacus suscipit elementum id non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eu neque eros. Ut eu quam justo.</p>
								<br>
								<div class="divider"></div>
								<br>
								<div class="row">
									<form>
										<div class="input-field col s6">
											<i class="material-icons prefix">account_circle</i>
											<input placeholder="Nombre" id="first_name" type="text" class="validate">
											<label for="first_name">Nombre</label>
										</div>
										<div class="input-field col s6">
											<input placeholder="Email" id="email" type="email" class="validate">
											<label for="email">Email</label>
										</div>
										<div class="input-field col s12">
											<input placeholder="Asunto" id="subject" type="text" class="validate">
											<label for="subject">Asunto</label>
										</div>
										<div class="input-field col s12">
											<textarea id="textarea1" class="materialize-textarea"></textarea>
											<label for="textarea1">Textarea</label>
										</div>
										<button type="submit" class="btn waves-effect waves-light center-align">Enviar    <i class="material-icons right">send</i></button>
									</form>
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