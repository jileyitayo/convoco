@extends('layouts.layout')
@if(Auth::guest())
    {{ redirect()->route('login') }}
@endif

@section('styles')
    <!-- Semantic Icon -->
    <link rel="stylesheet" href="{{ asset('semantic/components/icon.min.css') }}">
    <!-- Semantic  -->
    <link rel="stylesheet" href="{{ asset('semantic/css/semantic.min.css') }}">
@endsection

@section('content')
<div id="fh5co-main">
    {{--<div class="fh5co-more-contact">--}}
        <div class="fh5co-narrow-content"  style="padding: 0">
            <div class="row">
                <div style="width: 100%; height: 200px;  background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.87) ),url({{ asset('images/people.jpg') }}); background-position: top center; padding-top: 15px; text-align: center; color: #ffffff;">

                    <h1 style="color: #ffffff;">{{ ucwords($group['groupname']) }}</h1>
                    <div style="font-size: 15px;">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <p style=" height: 75px; padding: 0 25px 0 25px;">{{ $group['groupdescription'] }}</p>
                            </div>
                        </div>
                        <div style="float: left; margin-left: 3%;font-size: 20px;">
                            <label style="color: #e5ffc5;">Members</label>&nbsp;|&nbsp;<label><b>30</b></label>
                        </div>
                        <div style="float: right; font-size: 30px;">
                            <div class="col-md-12">
                                <div class="dropdown pull-right">
                                    <button class="ui teal button dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Action</b> <span class="caret"></span></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#"><span class="icon-pencil"></span> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><span class="icon-trash"></span> Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><span class="icon-message-typing"></span> Chat Room</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#inviteModal"><span class="icon-mail5"></span> Invite</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    {{--</div>--}}
    <div class="fh5co-narrow-content">
        <div class="fh5co-layout">
            <div class="ui four column grid">
                <div class="column">
                    <div class="ui fluid card">
                        <div class="image">
                            <img style="height: 225px;" src="{{ asset('images/me.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="header">Ezejiugo Chigbo</div>
                            <div class="meta">
                                <a>@emmajiugo</a>
                            </div>
                        </div>
                        <div class="extra content">
						      	<span>
						        	<i class="large mail icon"></i>
						      	</span>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid card">
                        <div class="image">
                            <img style="height: 225px;" src="{{ asset('images/loc.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="header">Ezejiugo Chigbo</div>
                            <div class="meta">
                                <a>@emmajiugo</a>
                            </div>
                        </div>
                        <div class="extra content">
						      	<span>
						        	<i class="large mail icon"></i>
						      	</span>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid card">
                        <div class="image">
                            <img style="height: 225px;" src="{{ asset('images/me.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="header">Ezejiugo Chigbo</div>
                            <div class="meta">
                                <a>@emmajiugo</a>
                            </div>
                        </div>
                        <div class="extra content">
						      	<span>
						        	<i class="large mail icon"></i>
						      	</span>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid card">
                        <div class="image">
                            <img style="height: 225px;" src="{{ asset('images/img-1.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="header">Jesuloluwa Eyitayo</div>
                            <div class="meta">
                                <a>@emmajiugo</a>
                            </div>
                        </div>
                        <div class="extra content">
						      	<span>
						        	<i class="large mail icon"></i>
						      	</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Semantic -->
    <script src="{{ asset('semantic/js/semantic.min.js') }}"></script>
@endsection
