@extends('layouts.site')

@section('title','سجيل دخول')

@section('content')

	<div class="container">
		@include('include.alerts.success')
        @include('include.alerts.errors')
		<div class="row" style="margin-top: 45px">
			<div class="col-md-4 col-md-offset-4">
				<h4>Varification Phone</h4>
				<form method="post" action="{{ route('auth.infopost') }}">
					@csrf

					<div class="form-group">
						<label for="phone">name</label>
						<input type="text" class="form-control" name="name" placeholder="add name">
						<span class="text-danger">@error('name') {{ $message }} @enderror</span>
					</div>

					<div class="form-group">
						<label for="phone">Password</label>
						<input type="password" class="form-control" name="password" placeholder="add password">
						<span class="text-danger">@error('password') {{ $message }} @enderror</span>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
