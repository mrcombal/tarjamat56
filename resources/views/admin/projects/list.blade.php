@extends('admin.master')

@section('title', 'Projects')
@section('title2', 'Projects')

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
    .subtitle {
        font-size: smaller;
    }
</style>
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{url('admin')}}">Dashboard</a></li>
        <li class="active">Projects</li>
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

            <table id="projects-list" style="width: 100%; border: 1px solid #eee;" class="table table-hover dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Beneficiary</th>
                        <th>Days</th>
                        <th>Daily rate</th>
                        <th>Budget</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="#">STC's technical team training program AUG2023</a><br>
                            <span class="text-muted subtitle">Starting in 1 month</span>
                        </td>
                        <td>Al Alameyah International</td>
                        <td>STC</td>
                        <td>120</td>
                        <td>$5,000</td>
                        <td>$600,000</td>
                        <td><span class="label label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a href="#">PNU's students training program APR2023</a><br>
                            <span class="text-muted subtitle">Ended 1 month ago</span>
                        </td>
                        <td>Erudite</td>
                        <td>Princess Noura University</td>
                        <td>30</td>
                        <td>$3,000</td>
                        <td>$90,000</td>
                        <td><span class="label label-default">Ended</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <a href="#">Zain's marketing team training program SEP2023</a><br>
                            <span class="text-muted subtitle">Starting in 2 months</span>
                        </td>
                        <td>Erudite</td>
                        <td>Zain</td>
                        <td>30</td>
                        <td>$1,200</td>
                        <td>$36,000</td>
                        <td><span class="label label-success">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{asset('plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app/project-list.js')}}"></script>
@stop
