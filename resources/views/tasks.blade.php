@extends('layouts.app')

@section('content')
	<div clas="panel-body">
		<!-- mjesto za prikaz grešaka -->
		@incloud('common.errors')
		
		<!-- WebObrazac za novi task -->
		<form action="/task" method="POST" class="form-horizontal">
		{{ csrf_field() }}
		
		<!-- task naziv -->
		<div class="form-group">
			<label for="task" class="col-sm-3 controm-lable">Task</label>
			
			<div class="col-sm-6">
				<input type="text" name="name" id="task-name" class="form-control">
			</div>
		</div>
			<!-- gumb za dodavanje taska -->
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Dodaj task
					</button>
				</div>
			</div>
		</form>
	</div>
@endsection