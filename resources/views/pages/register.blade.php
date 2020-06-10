@extends('layouts.system')

@section('title','Registration')

@section('content')
    <style>
        .grey-box{
            background:#999999;
            height: 60vh;
            width: 100%;
        }
        .grey-box .text{
            font-size: 5em;
        }
        .grey-box:hover{
            background:#f2f2f2;
        }
    </style>
    <div class="col">
        <div class="col-md-6">
            <div class="grey-box well">
                <h3 class="text"><a href="#">Consultant</a></h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="grey-box well">
                <h3 class="text"><a href="{{ route('company.create') }}">Company</a></h3>
            </div>
        </div>
    </div>
@stop
