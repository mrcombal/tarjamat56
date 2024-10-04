@extends('admin.master')

@section('title')
    @if($method == 'post')
        New client
    @else
        Edit client: {{$client->name}}
    @endif
@stop

@section('title2')
    @if($method == 'post')
        New client
    @else
        Edit client: {{$client->name}}
    @endif
@stop

@section('breadcrumps')
    <ol class="breadcrumb mb-0">
        <li><a href="{{route('index')}}">Dashboard</a></li>
        <li><a href="{{route('client.list')}}">clients</a></li>
        @if($method == 'post')
            <li class="active">New client</li>
        @else
            <li>{{$client->name}}</li>
        @endif
    </ol>
@stop

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app/css/flat.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            width: 100%;
            margin-bottom:20px;
            height: 39px;
            line-height: 39px;
        }
        .select2-container--default .select2-selection--multiple, .select2-dropdown {
            border-color: #e6e6e6 !important;
        }
        .select2-container .select2-search--inline .select2-search__field {
            vertical-align: middle;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            height: 46px;
            line-height: 46px;
        }

        .select2-container--default .select2-selection--single {
            height: 46px;
            line-height: 46px;
            border-radius: 0;
            border-color: #e6e6e6 !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 9px;
        }
        .input-lg {
            border-radius: 0;
        }
        .remove-course-btn {
            position: absolute;
            right: -15px;
            top: 10px;
            font-size: 9px;
            opacity: 0;
            transition: all 0.3s linear;
            border-radius: 50% !important;
            padding: 5px !important;
        }

        .remove-course-btn .ti {
            font-size: 10px;
        }

        .course-entry:hover  .remove-course-btn:hover {
            opacity: 1;
        }

        .course-entry:hover .remove-course-btn {
            display:block;
            opacity: .4;
        }
    </style>
@stop

@section('content')
    <div class="widget" style="padding: 0 15px;">

        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">
                    @if($method == 'post')
                        New client
                    @else
                        Edit client: {{$client->name}}
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

                <div class="row">
                    <div class="col-md-9">
                        <label for="name" class="control-label">Client</label>
                        <input id="name" type="text" class="form-control input-lg mb-20" name="name" value="{{$client->name}}" placeholder="Who is your new client?">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="sector" class="control-label">Sector</label>
                                <select name="sector_id" id="sector" class="form-control input-lg mb-20">
                                    @foreach($sectors as $sector)
                                        <option value="{{$sector->id}}" {{($client->sector_id == $sector->id) ? 'selected' : ''}}>{{$sector->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="nationality" class="control-label">Country</label>
                                <select name="country_id" id="nationality" class="form-control input-lg mb-20">
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{($country->id == 682) ? 'selected' : ''}}>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>





                    </div>
                    <div class="col-md-3">
                        <label for="image_file" class="control-label text-center" style="display: block;">Client's logo</label>
                        <label for="image_file" style="display:inline-block; padding: 3px; width: 100%" class="text-center">
                            @if(!$client->image_file)
                                <div class="img-container-list">
                                    <img src="{{asset('images/clients/default.png')}}" id="client-image" style="width: 96px; padding:5px; border:1px solid #eee;">
                                    <p class="text-center mt-10 mb-0">click to change logo</p>
                                    <p class="text-muted text-center" style="font-size: 10px;">Recommended: 1x1 aspect ratio. No borders.</p>
                                </div>
                                <input type="file" name="image_file" id="image_file" style="display: none;">
                            @endif
                        </label>
                        <br/>

                    </div>
                </div>




                <input type="submit" value="Save" class="btn btn-primary btn-lg">
                <a href="{{route('client.list')}}" class="btn btn-default btn-lg">Cancel</a>
            </div>
        </form>
    </div>
@stop

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $(document).ready(function() {
            let main_course_entry = $('#course-entry');
            let courses_template = main_course_entry.clone().removeAttr('id');
            main_course_entry.find('.remove-course-btn').remove();
            let course_list = $('#courses-list');
            $('#skills').select2({
                width: 'resolve'
            });
            $('.tiers').select2({
                width: 'resolve',
                placeholder: 'select a tier..'
            });
            $('.courses').select2({
                width: 'resolve',
                placeholder: 'select a course..'
            });
            $('#gender').on('change', function() {
                if(!$("#image_file").val()) {
                    let gender = $(this).val();
                    $('#client-image').attr('src', '/images/avatar-'+gender+'.svg');
                }
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#client-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image_file").change(function(){
                readURL(this);
            });
            /*******/

            $('#add-course').on('click', function() {
                course_list.append(courses_template.clone());
                course_list.find('.courses').last().select2({
                    width: 'resolve',
                    placeholder: 'select a course..'
                });
                course_list.find('.tiers').last().select2({
                    width: 'resolve',
                    placeholder: 'select a tier..'
                });
            });

            /******/

            $('body').on('click', '.remove-course-btn', function() {
                $(this).closest('.course-entry').remove();
            });

        });
    </script>
@endsection
