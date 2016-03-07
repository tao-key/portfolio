@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">

		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="font-weight: bold">Modifier la page d'accueil</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/panel/home/update') }}">
						{!! csrf_field() !!}

						@foreach($panel_homes as $panel_home)

						<p>{{ $panel_home->presentation }}</p>

						<div class="form-group">
							<label class="col-md-4 control-label">Présentation</label>
							<div class="col-md-6">
								<textarea rows="6" class="form-control" name="presentation" value="{{ old('prensentation') }}"></textarea>
							</div>
						</div>

						<p>{{ $panel_home->front_end }}</p>

						<div class="form-group">
							<label class="col-md-4 control-label">Web Design</label>
							<div class="col-md-6">
								<textarea rows="6" class="form-control" name="front_end" value="{{ old('front_end') }}"></textarea>
							</div>
						</div>

						<p>{{ $panel_home->back_end }}</p>

						<div class="form-group">
							<label class="col-md-4 control-label">Dévelloppement</label>
							<div class="col-md-6">
								<textarea rows="6" class="form-control" name="back_end" value="{{ old('back_end') }}"></textarea>
							</div>
						</div>

						<p>{{ $panel_home->comp_front }}</p>

						<div class="form-group">
							<label class="col-md-4 control-label">Compétences Front-end</label>
							<div class="col-md-6">
								<textarea rows="6" class="form-control" name="comp_front" value="{{ old('comp_front') }}"></textarea>
							</div>
						</div>

						<p>{{ $panel_home->comp_back }}</p>

						<div class="form-group">
							<label class="col-md-4 control-label">Compétences Back-end</label>
							<div class="col-md-6">
								<textarea rows="6" class="form-control" name="comp_back" value="{{ old('comp_back') }}"></textarea>
							</div>
						</div>
						@endforeach

						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Enregistrer
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection