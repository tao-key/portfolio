@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Modifier la page contact</div>
				<div class="panel-body">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					
					<div class="col-sm-offset-3 col-sm-6">
						<div class="panel panel-info">
							<div class="panel-heading">Contactez-moi</div>
							<div class="panel-body"> 
								{!! Form::open(['url' => 'contact/form']) !!}
								<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
									{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
									{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
								</div>
								<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
									{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
									{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
								</div>
								<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
									{!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
									{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
								</div>
								{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
								{!! Form::close() !!}
							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
