@if($errors->any())

	<div class="box is-shadowless has-no-h-padding">
		<article class="message is-danger">
			<div class="message-body">
				<div class="content is-danger">
					<strong>There are errors in this form</strong>

					<ul>

						@foreach($errors->all() as $error)

							<li>{{ $error }}</li>

						@endforeach
						
					</ul>
				</div>
			</div>
		</article>
	</div>

@endif