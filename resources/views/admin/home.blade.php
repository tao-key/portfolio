@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="font-weight: bold">Panel Admin</div>
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

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" onclick=document.location.href="{{ url('admin/panel/home') }}" class="btn btn-primary">Home</button>

							<button type="submit" onclick=document.location.href="{{ url('admin/panel/projets') }}" class="btn btn-primary">Projets</button>

							<button type="submit" onclick=document.location.href="{{ url('admin/panel/contact') }}" class="btn btn-primary">Contacts</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection