@extends('admin.master')

@section('title', 'Candidates')
@section('title2', 'Candidates')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
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
    .dataTables_filter {
        display: inline-block !important;
    }
    .toolbar {
        float: left;
        margin-right: 10px;
    }
    .toolbar .bootstrap-select .dropdown-toggle {
        height: 46px;
    }
    .bootstrap-select .dropdown-toggle:focus {
        outline: none !important;
    }
</style>
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{url('admin')}}">Dashboard</a></li>
        <li class="active">Candidates</li>
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
            @if($candidates->whereNull('verified_at')->count() > 0)
                <div class="alert alert-warning col-md-12">
                    <i class="ti-info-alt"></i>
                    You have <a id="unverified-link" href="#" style="font-weight: bold; color: inherit; text-decoration: underline;">{{$candidates->whereNull('verified_at')->count()}} unverified CVs</a> waiting to be reviewed.
                </div>
            @endif

            <table id="candidates-list" style="width: 100%; border: 1px solid #eee;" class="table table-hover dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Candidate</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidates as $candidate)
                        <tr data-id="{{$candidate->id}}">
                            <td>
                                @if($candidate->image_file)
                                    <img src="{{asset('images/candidates/'.$candidate->image_file)}}" style="width: 50px; border-radius: 50%;">
                                @else
                                    <img src="{{asset('images/avatar-'.$candidate->gender.'.svg')}}" style="width: 50px; border-radius: 50%;">
                                @endif
                                <a href="{{route('candidate.profile', $candidate->id)}}">{!! $candidate->name !!}</a>
                            </td>
                            <td>{{$candidate->email}}</td>
                            <td>{{$candidate->mobile}}</td>
                            <td>
                                <span class="label label-outline label-{{$candidate->verified_at ? 'success' : 'danger'}}">
                                    <i class="ti-{{$candidate->verified_at ? 'check' : 'info'}}"></i>
                                    {{$candidate->status}}
                                </span>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-sm btn-default" href="{{url('/admin/candidates/'.$candidate->id.'/edit')}}">Edit</a>
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
    <script src="{{asset('plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app/candidate-list.js')}}"></script>
@stop
