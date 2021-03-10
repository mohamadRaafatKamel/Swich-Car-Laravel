@extends('layouts.site')

@section('title','سجيل دخول')

@section('content')

	<div class="container">
		@include('include.alerts.success')
        @include('include.alerts.errors')
		<div class="row" style="margin-top: 45px">
			<div class="col-md-4 col-md-offset-4">
				<h4>Login</h4>
				<hr>
				<form action="{{ route('auth.check') }}" method="post">
					@csrf
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone" placeholder="add phone" value="{{ old('phone') }}">
						<span class="text-danger">@error('phone') {{ $message }} @enderror</span>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="add password" value="{{ old('password') }}">
						<span class="text-danger">@error('password') {{ $message }} @enderror</span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Login</button>
					</div>
					<br>
					<a href="register">Create new account</a>
				</form>
			</div>
		</div>
	</div>
@endsection
