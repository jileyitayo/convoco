@extends('layouts.layout')

@section('content')
<div id="fh5co-main">
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{ asset('images/img_bg_3.jpg') }});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div>
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form class="form form-horizontal" method="POST" action="{{ route('password.email') }}">
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input id="email" type="email" class="form-control" style="background: #ffffff;" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-md">
                                                    Send Password Reset Link
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</div>
@endsection
