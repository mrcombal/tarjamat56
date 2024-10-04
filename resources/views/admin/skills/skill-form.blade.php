@extends('admin.master')

@section('title')
    @if($method == 'post')
        New skill
    @else
        Edit skill: {{$skill->name}}
    @endif
@stop

@section('title2')
    @if($method == 'post')
        New skill
    @else
        Edit Category: {{$skill->name}}
    @endif
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{route('index')}}">Dashboard</a></li>
        <li><a href="{{route('skill.list')}}">skills</a></li>
        @if($method == 'post')
            <li class="active">New skill</li>
        @else
            <li>{{$skill->name}}</li>
        @endif
    </ol>
@stop

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app/css/flat.css')}}">
@stop

@section('content')
    <div class="widget" style="padding: 0 15px;">

        <form class="form-horizontal" method="post">
            {{csrf_field()}}

            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">
                    @if($method == 'post')
                        New skill
                    @else
                        Edit skill: {{$skill->name}}
                    @endif
                </h3>
            </div>

            <div class="widget-body">

                @if(count($errors) > 0)
                    <div class="alert alert-danger col-md-12">
                        @if(count($errors) == 1)
                            {{$errors->first()}}
                        @else
                            The following errors happened:
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endif

                @if(session()->has('message'))
                    <div class="alert alert-success col-md-12">
                        {!! Session::get('message') !!}
                    </div>
                @endif

                <label for="name" class="control-label">Course name</label>

                <input id="name" type="text" class="form-control input-lg" name="name" value="{{$skill->name}}">

                <input type="submit" value="Save" class="btn btn-primary btn-lg mt-20">
                <a href="{{route('skill.list')}}" class="btn btn-default btn-lg mt-20">Cancel</a>
            </div>
        </form>
    </div>
@stop
