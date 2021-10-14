<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input[type=email],input[type=password]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;    
        }
        #card{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 50%;
            height: 50%;
            margin-left: 25%;
            margin-top: 100px;
            background-size: cover;
            height: 300px;
        }
        .card-body{
            padding: 2px 16px;
        }
        .fb-btn{
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .google-btn{
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .github-btn{
            background-color: black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .card-header{
            text-align: center;
            justify-content: center;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div style="text-align: center;font-size:20px;margin-top:20px;color:blue"><b>Parkin disease managment system</b></div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="card">
                    <div class="card-header">
                        {{__('Login')}}
                    </div>
                    <div class="card-body">
                    @if($errors->any())
                        <h4 style="color:red; text-align:center">{{$errors->first()}}</h4>
                    @endif
                        <form method="POST" action="{{route('simplelogin')}}">
                            @csrf
                            <div class="form-group row">
                                    <label for="email" class="col-md-4 col-from-label text-md-right">{{__('Email')}}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
                                    </div>
                            </div>
                            <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            
                                <button type="submit" class="fb-btn">
                                    {{ __('Login') }}
                                </button>
                           
                        </div>
                        <div class="card-header">OR </div>
                        <div class="card-header">Login With </div>
                        <div class="form-group row" style="margin-left:60px">
                            <!--<div class="col-md-6">-->
                                <a href="{{route('login.github')}}" class="github-btn">Login with Github</a>
                            <!--</div>-->
                            <!--<div>-->
                                <a href="{{route('login.facebook')}}" class="fb-btn">Login with Facebook</a>
                            <!--</div>-->
                            <!--<div>-->
                                <a href="{{route('login.google')}}" class="google-btn">Login with Google</a>
                            <!--</div>-->
                        </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>