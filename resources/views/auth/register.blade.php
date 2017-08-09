@extends('layouts.layout')

@section('content')
<div id="fh5co-main">
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight" style="background-image: url({{ asset('images/img_bg_2.jpg') }});">
			<div class="row">
				<div class="card-main">
					<div class="col-md-7">
						<div class="join-words text-center">
							<h2>BIG CATCHY TITLE HERE...</h2>
							<p class="join-pg">OK. We will be putting some charmy, sexy and romantic words here. Lol</p>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card">
							<h4>SIGN UP</h4>
							<div class="line"></div>
							<form class="form-horizontal" method="POST" action="{{ route('register') }}">
								{{ csrf_field() }}
								<div class="form-group-md{{ $errors->has('username') ? ' has-error' : '' }}">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
								</div>
								<div class="form-group-md{{ $errors->has('email') ? ' has-error' : '' }}">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
									@if ($errors->has('username'))
										<span class="help-block">
											<strong>{{ $errors->first('username') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group-md{ $errors->has('password') ? ' has-error' : '' }}">
									<label>Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
								<!-- <div class="form-group">
									<label>confirm password</label>
									<input type="password" name="cpass" class="form-control">
								</div> -->
								<div class="form-group text-center">
									<br>
									<button type="submit" name="" class="btn btn-success pull-right">Register</button>
								</div>
							</form>
							<div class="line"></div>
							<p>Already a member? Click <a href="{{ route('login') }}"> Login</a> to catch up with friends.</p><br/>
							<small>By clicking "Register", you agree to our <a href="#">terms of service</a> and <a href="#">privacy policy</a>.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
</div>