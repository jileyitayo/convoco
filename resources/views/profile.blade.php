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
	<div class="fh5co-more-contact">
		<div class="fh5co-narrow-content">
			<div class="row">
				<div class="col-md-3">
					<div class="fh5co-feature fh5co-feature-sm">
						<img src="images/me.jpg" class="profile-img img-circle">

						<button class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Edit Picture</button>
					</div>
				</div>
				<div class="col-md-5">
					<div class="rect-card">
						<h3>Ezejiugo Emmanuel Chigbo<br><small>@emmajiugo</small></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fh5co-narrow-content">

		<div class="row">
			<div class="col-md-offset-2 col-md-4">
				<h4>Personal Data</h4>
			</div>
		</div>
		<form class="form-horizontal" role="form" action="" method="">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="row">
						<div class="form-group">
							<label class="col-md-3">Last Name:</label>
							<div class="col-md-8">
								<label class="label1">Ezejiugo</label>
								<!-- <input type="text" class="input-1 form-control" placeholder="Enter Last Name"> -->
							</div>
							<div>
								<a class="edit1" href="#">edit</a>
								<a class="save1" href="#">save</a>
							</div>
						</div>
						<div class="line"></div>
						<div class="form-group">
							<label class="col-md-3">First Name:</label>
							<div class="col-md-8">
								<label class="label2">Emmanuel</label>
								<!-- <input type="text" class="input-2 form-control" placeholder="Enter First Name"> -->
							</div>
							<div>
								<a type="button" class="edit2" href="#">edit</a>
								<a type="button" class="save2" href="#">save</a>
							</div>
						</div>
						<div class="line"></div>
						<div class="form-group">
							<label class="col-md-3">Middle Name:</label>
							<div class="col-md-8">
								<label class="label3">Chigbo</label>
								<!-- <input type="text" class="input-3 form-control" placeholder="Enter Middle Name (optional)"> -->
							</div>
							<div>
								<a type="button" class="edit3" href="#">edit</a>
								<a type="button" class="save3" href="#">save</a>
							</div>
						</div>
						<div class="line"></div>
						<div class="form-group">
							<label class="col-md-3">Email Address:</label>
							<div class="col-md-8">
								<label class="label4">emmajiugo@gmail.com</label>
								<!-- <input type="text" class="input-4 form-control" placeholder="Email Address"> -->
							</div>
							<div>
								<a type="button" class="edit4" href="#">edit</a>
								<a type="button" class="save4" href="#">save</a>
							</div>
						</div>
						<div class="line"></div>
						<div class="form-group">
							<label class="col-md-3">Phone Number:</label>
							<div class="col-md-8">
								<label class="label5">(+234) 07031056082</label>
								<!-- <input type="text" class="input-5 form-control" placeholder="eg: (+234) 07031056082"> -->
							</div>
							<div>
								<a type="button" class="edit5" href="#">edit</a>
								<a type="button" class="save5" href="#">save</a>
							</div>
						</div>
						<div class="line"></div>
						<div class="form-group">
							<label class="col-md-3">Date of Birth:</label>
							<div class="col-md-8">
								<label class="label6">09/12/1991</label>
								<!-- <input type="text" class="input-6 form-control" placeholder="eg: 09/12/1991"> -->
							</div>
							<div>
								<a type="button" class="edit6" href="#">edit</a>
								<a type="button" class="save6" href="#">save</a>
							</div>
						</div>
						<div class="line"></div>
						<!-- <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary pull-right"><b>Save</b></button>
                        </div> -->
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="gallery">
		<div class="gallery-box">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h3>Gallery</h3>
						</div>
						<div class="col-md-6">
							<button class="btn pull-right">Add to Gallery</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 gallery-bottom">
				<b>Gallery pics goes here...</b>
			</div>
		</div>
	</div>
	<div class="event">
		<div class="event-box">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h3>Event</h3>
						</div>
						<div class="col-md-6">
							<button class="btn pull-right">Add Event</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 event-bottom">
				<b>Event goes here...</b>
			</div>
		</div>
	</div>
	<div class="group">
		<div class="group-box">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h3>Groups</h3>
						</div>
						<div class="col-md-6">
							<button href="groups.html" class="btn pull-right">Add New Group</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 gallery-bottom">
				<b>Groups goes here...</b>
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
<!-- coverting label to textbox when edit button is clicked -->
<script type="text/javascript">
    $(document).ready(function() {
        //hiding the save link
        $('.save1').hide();
        $('.save2').hide();
        $('.save3').hide();
        $('.save4').hide();
        $('.save5').hide();
        $('.save6').hide();

        //clicking the edit link
        $('.edit1').click(function () {
            var text = $('.label1').text();
            var input = $('<input type="text" class="form-control" value="' + text + '" />');
            $('.label1').text('').append(input);
            input.select();
            $('.edit1').hide();
            $('.save1').show();
        });
        $('.edit2').click(function () {
            var text = $('.label2').text();
            var input = $('<input type="text" class="form-control" value="' + text + '" />');
            $('.label2').text('').append(input);
            input.select();
            $('.edit2').hide();
            $('.save2').show();
        });
        $('.edit3').click(function () {
            var text = $('.label3').text();
            var input = $('<input type="text" class="form-control" value="' + text + '" />');
            $('.label3').text('').append(input);
            input.select();
            $('.edit3').hide();
            $('.save3').show();
        });
        $('.edit4').click(function () {
            var text = $('.label4').text();
            var input = $('<input type="email" class="form-control" value="' + text + '" />');
            $('.label4').text('').append(input);
            input.select();
            $('.edit4').hide();
            $('.save4').show();
        });
        $('.edit5').click(function () {
            var text = $('.label5').text();
            var input = $('<input type="text" class="form-control" value="' + text + '" />');
            $('.label5').text('').append(input);
            input.select();
            $('.edit5').hide();
            $('.save5').show();
        });
        $('.edit6').click(function () {
            var text = $('.label6').text();
            var input = $('<input type="text" class="form-control" value="' + text + '" />');
            $('.label6').text('').append(input);
            input.select();
            $('.edit6').hide();
            $('.save6').show();
        });
    });
</script>