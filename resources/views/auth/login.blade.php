@extends('layouts.layout')

@section('content')
<div id="fh5co-main">
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight" style="background-image: url({{ asset('images/img_bg_2.jpg') }});">
			<div class="row">
				<div class="login-main">
					<div class="col-md-7">
						<div class="join-words text-center">
							<h2>BIG CATCHY TITLE HERE...</h2>
							<p class="join-pg">OK. We will be putting some charmy, sexy and romantic words here. Lol</p>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card">
							<h4>LOGIN</h4>
							<div class="line"></div>
								<form class="form form-horizontal" method="POST" action="{{ route('login') }}">
									{{ csrf_field() }}
									<div class="form-group-md{{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="email">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
										@endif
									</div>
									<div class="form-group-md{{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password">Password</label>
										<input id="password" type="password" class="form-control" name="password" required>
										@if ($errors->has('password'))
											<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
										@endif
									</div>
									<div class="form-group text-center">
										<br>
										<div class="checkbox pull-left">
											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
											</label>
										</div>
										<button type="submit" name="" class="btn btn-success btn-sm pull-right">Login</button>

									</div>
									<div class="form-group text-center">
										<a class="" href="{{ route('password.request') }}">
											Forgot Your Password?
										</a>
									</div>
								</form>
							<div class="line"></div>
							<p>Not a member yet? Click <a href="{{ route('register') }}">Join Now</a> to catch up with friends.</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
</div>
@endsection