@extends('admin.master')

@section('title')
    @if($method == 'post')
        New course
    @else
        Editing: {{$course->name}}
    @endif
@stop

@section('title2')
    @if($method == 'post')
        New course
    @else
        Editing: {{$course->name}}
    @endif
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{route('index')}}">Dashboard</a></li>
        <li><a href="{{route('course.list')}}">courses</a></li>
        @if($method == 'post')
            <li class="active">New course</li>
        @else
            <li>{{$course->name}}</li>
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
                        New course
                    @else
                        Edit course: {{$course->name}}
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
                <input id="name" type="text" class="form-control input-lg mb-20" name="name" value="{{$course->name}}">

                <label for="description" class="control-label">Description</label>
                <p class="text-muted">You can ask AI to auto-generate course description of 50 words based on the course title provided above.</p>
                <button type="button" class="btn btn-default btn-sm mb-10 btn-info" disabled id="generate">Auto-generate</button>
                <textarea id="description" type="text" class="form-control input-lg" name="description" rows="10" {{$course->name}}>
                    {!! $course->description !!}
                </textarea>


                <input type="submit" value="Save" class="btn btn-primary btn-lg mt-20">
                <a href="{{route('course.list')}}" class="btn btn-default btn-lg mt-20">Cancel</a>
            </div>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            let name_field = $('#name');
            let description_field = $('#description');
            let generate_button = $('#generate');

            name_field.on('keyup', function() {
                if($(this).val().length > 2) {
                   generate_button.removeAttr('disabled')
               } else {
                   generate_button.prop('disabled', true);
               }
            });

            generate_button.on('click', function() {
                generate_button.html('generating..')
                generate_button.prop('disabled', true);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/admin/courses/generate",
                    cache: false,
                    data: {
                        name: name_field.val()
                    },
                    success: function(response) {
                        description_field.val(response.content)
                        generate_button.html('Auto-generate')
                        generate_button.removeAttr('disabled')

                    }
                });
            });
        });
    </script>
@stop
