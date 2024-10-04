@extends('admin.master')

@section('title')
    {{$course->name}}
@stop

@section('title2')
    {{$course->name}}
@stop

@section('style')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0;
        }
    </style>
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{route('index')}}">Dashboard</a></li>
        <li><a href="{{route('course.list')}}">courses</a></li>
        <li>{{$course->name}}</li>
    </ol>
@stop

@section('content')
    <div class="widget" style="padding: 0 15px;">
        <div class="widget-body">
            <div class="clearfix mb-20">
                <h3 class="widget-title mb-20" style="margin-top:35px; font-size:1.8em;">{{$course->name}}</h3>
                <p class="text-muted" style="text-align: justify;">{!! $course->description !!}</p>
            </div>

            <h4>Instructors</h4>
            <table id="candidates-list" style="width: 100%; border: 1px solid #eee;" class="table table-hover dt-responsive nowrap">
                <thead>
                <tr>
                    <th>Candidate</th>
                    <th>Experience</th>
                    <th>Tier</th>
                </tr>
                </thead>
                <tbody>
                @foreach($course->candidates as $candidate)
                    <tr data-id="{{$candidate->id}}">
                        <td>
                            @if($candidate->image_file)
                                <img src="{{asset('images/candidates/'.$candidate->image_file)}}" style="width: 50px; border-radius: 50%;">
                            @else
                                <img src="{{asset('images/avatar-'.$candidate->gender.'.svg')}}" style="width: 50px; border-radius: 50%;">
                            @endif
                                <a href="{{route('candidate.profile', $candidate->id)}}">{!! $candidate->name !!}</a>




                        </td>
                        <td>{{$candidate->pivot->experience}}</td>
                        <td>{{$candidate->pivot->tier}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>



    </div>
@stop

@section('scripts')
    <script type="text/javascript" src="{{asset('js/app/course-candidates-list.js')}}"></script>
@stop
