@extends('layouts.site')

@section('title','سجيل دخول')

@section('content')

	<div class="container">
		@include('include.alerts.success')
        @include('include.alerts.errors')
		<div class="row" style="margin-top: 45px">
			<div class="col-md-4 col-md-offset-4">
				<h4>Varification Phone</h4>
				<form method="post" action="{{ route('auth.validcodepost') }}">
					@csrf

					<div class="form-group">
						<label for="phone">Code</label>
						<input type="text" class="form-control" name="code" placeholder="add Code">
						<span class="text-danger">@error('code') {{ $message }} @enderror</span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Send</button>
					</div>
				</form>

				<!-- remove when end -->
				<p>SMS Code is {{ $user->verified_code }}</p>
			</div>
		</div>
	</div>

@endsection
