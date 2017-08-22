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
        <div class="fh5co-narrow-content" style="min-height: 100vh;">
            <div class="row">
                <div class="ui feed">
                    {{--event 4--}}
                    <div class="event">
                        <div class="label">
                            <img style="width: 30px; display: inline;padding: 0 .2em .6em .3em;vertical-align: baseline;" src="{{ asset('images/IMG_1166.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="summary">
                                <a>Joe Henderson</a> sent a message to <a>coworker</a> group
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                            <div class="extra text">
                                How are you doing?
                            </div>
                        </div>
                    </div>
                    {{--event 6 -> Group Invitation --}}
                    <div class="event">
                        <div class="label">
                            <img style="width: 30px; display: inline;padding: 0 .2em .6em .3em;vertical-align: baseline;" src="{{ asset('images/IMG_0091.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="summary">
                                <a>Justen Kitsune</a> invited you to the <a>coworker</a> group.
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--event 6 -> Group --}}
                    <div class="event">
                        <div class="label">
                            <img style="width: 30px; display: inline;padding: 0 .2em .6em .3em;vertical-align: baseline;" src="{{ asset('images/IMG_0091.jpg') }}">
                        </div>
                        <div class="content">
                            <div class="summary">
                                You joined the <a>coworker</a> group.
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <meta name="_token" content="{!! csrf_token() !!}" />
@endsection

@section('scripts')
    <!-- Limiting number of characters -->
    <script type="text/javascript" src="{{ asset('js/characterlimit.js') }}"></script>
    <script type="text/javascript">
        $('input#name, textarea#desc').characterlimit();
    </script>
    <!-- Semantic -->
    {{--<script src="{{ asset('semantic/js/semantic.min.js') }}"></script>--}}
@endsection