@extends('_layouts.master')

@section('styles')
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 0;
            padding-top: 100px;
            width: 100%;
            height: 100%;
            color: #A0A099;
            font-weight: 100;
            font-family: 'Lato';
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
@endsection

@section('content')
                <div class="title text-center">Premium Jawner: <b>habernito</b></div>
                {{--<div class="quote">{{ Inspiring::quote() }}</div>--}}
                <div class="quote text-center">Taste is overrated.</div>
@endsection
