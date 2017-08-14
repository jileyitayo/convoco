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
		<div class="fh5co-narrow-content" style="min-height: 100vh;">
			<div class="row">
				@if(isset($usergroups) && $usergroups == null)
					<div class="col-md-offset-4 col-md-4 fh5co-add-group text-center">
						<div class="add">
							<img src="{{ asset('images/add.jpg') }}" class="img-circle" data-toggle="modal" data-target="#addGroup">
						</div>
						<p><br><b>Click "Add Group" to invite family and friends.</b></p>
						<p>>> Test <a href="#" data-toggle="modal" data-target="#inviteModal">"Invite"</a> link</p>
					</div>
				@else
					<div class="row" style="padding: 0px 15px 0px 15px"><button class="ui blue basic button float-right" data-toggle="modal" data-target="#addGroup"><span class="icon-file-add"></span> Create Group</button><br/><br/></div>
					@foreach ($usergroups as $usergroup)
						<div style="margin-bottom:5px; width: 100%; height: auto; min-height: 240px; padding: 0px 15px 0px 15px; background-color: #dddddd;">
							<div class="row" style="height: inherit">
								<div id="{{ $usergroup['id'] }}" class="col-md-6 col-sm-6 col-xs-6" style="height: 275px; min-height: 240px; background-size: cover; background-image: url({{ asset('images/me.jpg') }}); background-position: center; width: 50%;">

								</div>

								<div class="col-md-6 col-sm-6 col-xs-6" style="font-size: 15px;text-align: center; padding: 15px; padding-bottom: 5px; color: #000;">
									<a href="{{ route("showGroup", ['groupid' => $usergroup['id']]) }}">
										<h2>{{ ucwords($usergroup['groupname']) }}</h2>
										<p style="height: 75px;padding: 0 10px 0 10px; color: #000;">{{ $usergroup['groupdescription'] }}</p>
										<label >Members</label><br/>
										<label>30</label><br/>
									</a>

									<div style="float: right; font-size: 30px; color: #000;"><a href="" ><span class="icon-pencil"></span></a> <a href="" ><span class="icon-mail5"></span></a> <a href=""><span class="icon-trash"></span></a></div>
								</div>
								</a>
							</div>
						</div>
						<br/>
					@endforeach
				@endif
			</div>
			{{--@if(isset($message))<div class="alert alert-{{ $message['alert'] }}">{{ $message['message'] }}</div>@endif--}}
		</div>
	</div>

	<!-- Modal for adding the Group name and description -->
	<div id="addGroup" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Create New Group</h4>
				</div>
      			<div class="modal-body">
					<form class="form" action="{{ action('GroupController@store') }}" method="POST">
						{{ csrf_field() }}
						<div class="form-group-md{{ $errors->has('groupname') ? ' has-error' : ''}}">
							<label>Group Name</label>
							<input type="text" name="groupname" id="name" placeholder="Choose a Group Name" value="{{ old('groupname') }}" class="form-control" required data-maxchar="30">
							<span class="pull-right">
				                <em>characters allowed: </em>
				                <em class="character-counter"></em>
				            </span>
							@if ($errors->has('groupname'))
								<span class="help-block">
									<strong>{{ $errors->first('groupname') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group-md{{ $errors->has('groupdescription') ? ' has-error' : ''}}">
							<label>Group Description</label>
							<textarea name="groupdescription" id="desc" placeholder="Enter a description" class="form-control"  data-maxchar="150">{{ old('groupdescription') }}</textarea>
							<span class="pull-right">
				                <em>characters allowed: </em>
				                <em class="character-counter"></em>
				            </span>
							@if ($errors->has('groupdescription'))
								<span class="help-block">
									<strong>{{ $errors->first('groupdescription') }}</strong>
								</span>
							@endif
						</div>
						<hr/>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-lg btn-success"><b>Create Group</b></button>
						</div>
					</form>
      			</div>
      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>

	<!-- Modal for inviting new members -->
	<div id="inviteModal" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">

    		<!-- Modal content-->
    		<div class="modal-content">
      			<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">New Invite</h4>
      			</div>
      			<div class="modal-body">
        			<form>
        				<div class="form-group">
        					<label>Email</label>
        					<input type="text" name="email" placeholder="Enter invitee's email" class="form-control">
        				</div>
        				<div class="form-group text-center">
        					<button type="submit" name="create" class="btn btn-lg btn-success"><b>Invite</b></button>
        				</div>
        			</form>
      			</div>
      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>
@endsection

@section('scripts')
	<!-- Limiting number of characters -->
	<script type="text/javascript" src="{{ asset('js/characterlimit.js') }}"></script>
	<script type="text/javascript">
        $('input#name, textarea#desc').characterlimit();
	</script>
	<!-- Semantic -->
	<script src="{{ asset('semantic/js/semantic.min.js') }}"></script>
@endsection
