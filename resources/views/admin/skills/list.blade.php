@extends('admin.master')

@section('title', 'Skills')
@section('title2', 'Skills')

@section('style')
<style>
    .img-container-list {
        background: #DDDDDC;
        max-width: 70px;
        overflow: auto;
        float: left;
    }
    .img-container-list img {
        display: block;
        width: 100%;
        max-width: 100px;
        height: auto;
    }
    .cell-text {
        float: left;
        margin-left: 2rem;
        font-size: 2rem;
        padding: 1rem 0;
    }
    .dataTables_filter input {
        height: 46px;
        padding: 10px 16px;
        font-size: 16px;
        line-height: 1.3333333;
        border-radius: 0;
        margin-left: 0 !important;
    }
</style>
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{url('admin')}}">Dashboard</a></li>
        <li class="active">Skills</li>
    </ol>
@stop


@section('content')

    <div class="widget no-border">

        <div class="widget-body p-0">
            @if(Session::has('message'))
                <div class="alert alert-success col-md-12">
                    {!! Session::get('message') !!}
                </div>
            @endif

            <table id="skills-list" style="width: 100%; border: 1px solid #eee;" class="table table-hover dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Candidates</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skills as $skill)
                        <tr data-id="{{$skill->id}}">
                            <td>{!! $skill->name !!}</td>
                            <td>{{$skill->candidates->count()}}</td>
                            <td class="text-right">
                                <a class="btn btn-sm btn-default" href="{{ route('skill.edit', $skill->id) }}">Edit</a>
                                <button class="btn btn-sm btn-danger delete">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{asset('plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app/skill-list.js')}}"></script>
@stop