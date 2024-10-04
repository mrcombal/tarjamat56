<!DOCTYPE html>
<html lang="en" style="height: 100%">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hydra Recruiting System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/PACE/themes/blue/pace-theme-flash.css')}}">
    <script type="text/javascript" src="{{asset('plugins/PACE/pace.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/first-layout.css')}}">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
  </head>

    <body style="background-color: #000232;" class="body-bg-full v2">
        <div class="container page-container">
            <div class="page-content" style="background-color: #5C7A30;">
                <div class="v2" style="box-shadow:none; padding: 40px 20px 20px 20px;">
                    <div class="logo"><img src="{{asset('images/tarjamat-logo-colored.svg')}}" alt="" style="width: 80%;"></div>
                        <form method="post" class="form-horizontal">
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
                            {{csrf_field()}}


            <div class="form-group">
              <div class="col-xs-12">
                <input type="email" placeholder="E-mail" class="form-control" name="email" value="{{old('email')}}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>
            </div>

            <button type="submit" class="btn-lg btn btn-primary btn-block" style="margin-top:20px;">Sign in</button>
          </form>


        </div>
      </div>
    </div>

    <!-- jQuery-->
    <script type="text/javascript" src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>
