@extends('layouts.app')
@section('content')
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="card-header mx-auto" style="background-color: red">
        <span style="font-family: 'Frank Ruhl Libre', serif;font-size: 30px"> LAMODA </span><br/>
        <span class="mt-5" style="font-family: 'Frank Ruhl Libre' , serif;font-size: 20px"> Login Dashboard </span>
    </div>
    <!-- Login Form -->
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color: red"><i class="fas fa-at"></i></span>
                    </div>
                     <input id="email" placeholder="username@email.com" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color: red"><i class="fas fa-key"></i></span>
                    </div>
                    <input id="password" type="password" placeholder="********" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                   <button type="submit" style="border-radius: 20px;background-color: red;" class="btn text-white container-fluid">
                    {{ __('Login') }}
                    </button>
                </div>

            </form>
        </div>
    <div id="formFooter">
      <a class="underlineHover" style="text-decoration: none;" href="{{url('/')}}">Go to the Site</a>
    </div>

  </div>
</div>
@endsection
<script type="text/javascript" src="{{asset('js/jquery/jquery-3.3.1.js')}}"></script>
