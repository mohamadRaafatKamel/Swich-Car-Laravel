@extends('layouts.site')

@section('title','سجيل دخول')

@section('content')

	<div class="container">
		@include('include.alerts.success')
        @include('include.alerts.errors')
		<div class="row" style="margin-top: 45px">
			<div class="col-md-4 col-md-offset-4">
				<h4>Register</h4>
				<form method="post" action="{{ route('auth.create') }}">
					@csrf
					<div class="form-group">
						<label for="countrycode">Country</label>
						<select class="form-control" name="countrycode">
							<option value="+20">Egypt</option>
							<option value="+222">Sudia</option>
							<option value="+222">Emarat</option>
						</select>
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone" placeholder="add phone">
						<span class="text-danger">@error('phone') {{ $message }} @enderror</span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">signUp</button>
					</div>
					<br>
					<a href="login">I already have account</a>
				</form>
			</div>
		</div>
	</div>

@endsection
