@extends('layouts.layout')
@if(Auth::guest())
    {{ redirect()->route('login') }}
@endif

@section('styles')
    <!-- Semantic Icon -->
    <link rel="stylesheet" href="semantic/components/icon.min.css">
    <!-- Semantic  -->
    <link rel="stylesheet" href="semantic/css/semantic.min.css">
@endsection

@section('content')
<div id="fh5co-main">
    <div class="fh5co-more-contact">
        <div class="fh5co-narrow-content">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="rect-card">
                        <h2 class="headh2">Group Name</h2>
                        <p class="headp"><b>Group Description Here....</b></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="dropdown pull-right">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Action</b> <span class="caret"></span></button>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Chat Room</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#inviteModal">Invite</a></li>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-narrow-content">
        <div class="fh5co-layout">
            <div class="ui four column grid">
                <div class="column">
                    <div class="ui fluid card">
                        <div class="image">
                            <img src="images/me.jpg">
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
                            <img src="images/me.jpg">
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
                            <img src="images/me.jpg">
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
                            <img src="images/me.jpg">
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
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Semantic -->
    <script src="semantic/js/semantic.min.js"></script>
@endsection
