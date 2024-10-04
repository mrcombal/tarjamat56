@extends('admin.master')

@section('title')
    {{$candidate->name}}
@stop

@section('title2')
    {{$candidate->name}}
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{route('index')}}">Dashboard</a></li>
        <li><a href="{{route('candidate.list')}}">candidates</a></li>
        <li>{{$candidate->name}}</li>
    </ol>
@stop

@section('content')
    <div class="widget" style="padding: 0 15px;">
        <div class="widget-body">
            <div class="clearfix mb-20">
                @if($candidate->image_file)
                    <img src="{{asset('images/candidates/'.$candidate->image_file)}}" style="width:120px; border-radius: 50%;" class="pull-left">
                @else
                    <img src="{{asset('images/avatar-'.$candidate->gender.'.svg')}}" style="width:120px;" class="pull-left">
                @endif
                <h3 class="widget-title pull-left ml-20" style="margin-top:35px; font-size:1.8em;">
                    {{$candidate->name}}
                    @if($candidate->verified_at)
                        <i class="ti-check" data-toggle="tooltip" title="Verified {{$candidate->verified_at->diffForHumans()}} by {{$candidate->admin->name}}" style="color: #5cb85c; font-weight: bold; font-size: 16px;"></i>
                    @else
                        <i class="ti-info-alt" data-toggle="tooltip" title="Pending approval" style="color: #c1272d; font-size: 16px;"></i>
                    @endif
                    <br>
                    <small style="" class="pull-left">{{$candidate->tagline}}</small>
                    <!--
                    <div class="contact-info mt-30" style="font-size: .55em">
                        <span class="phone text-muted">{{ $candidate->mobile }}</span> - <span class="email text-muted">{{ $candidate->email }}</span>
                    </div>-->
                </h3>

                @if($candidate->resume_file)
                    <a href="{{asset('resumes/'.$candidate->resume_file)}}" class="btn btn-default btn-lg pull-right mt-30" download=""><i class="ti-download"></i> Download resume</a>
                @endif
                @if(!$candidate->verified_at)
                    <a href="#" id="verify" class="btn btn-success btn-lg pull-right mt-30 mr-10"><i class="ti-check"></i> Verify</a>
                @endif
            </div>

            @if($candidate->skills)
            <h4>Skills</h4>
            <div class="skills mb-30">
                @foreach($candidate->skills as $skill)
                    <span class="label label-outline label-primary">{{$skill->name}}</span>
                @endforeach
            </div>
            @endif

            <h4>Courses</h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Course</th>
                    <th>Experience</th>
                    <th>Tier</th>
                </tr>
                @foreach($candidate->courses as $course)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->pivot->experience}} {{ (intval($course->pivot->experience) > 1) ? 'years' : 'year' }}</td>
                        <td>{{ ($course->pivot->tier) ? "Tier " . $course->pivot->tier : "N/A" }} {{ $course->pivot->tier }}</td>
                    </tr>
                @endforeach
            </table>

            <h4>Certificates</h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Certificate</th>
                    <th>Vendor</th>
                    <th>Certified at</th>
                </tr>
                @foreach($candidate->certificates as $certificate)
                    <tr>
                        <td>{{$certificate->name}}</td>
                        <td>{{$certificate->vendor->name}}</td>
                        <td>{{$certificate->pivot->certified_at}}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

    <input type="hidden" name="candidate_id" id="candidate-id" value="{{$candidate->id}}">
@stop

@section('scripts')
    <script src="{{asset('plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app/profile.js')}}"></script>
@stop
