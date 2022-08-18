<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
          crossorigin="anonymous"/>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>

<body class=" login-page bg-dark">
    <div class="back">
        <img src="{{url('/images/bbb.png')}}">
    </div>

    
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"></a>
    </div>

    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card shadow-lg p-2 mb-5 bg-white rounded" style="position: relative; top: 100px;">
        <div class="card-header" , style="background-color: whitesmoke; margin:auto;">
            <img class="logo elevation-4" style="border-radius: 50%;"
            src="{{url('/images/image17.png')}}" width="75px" height="75px"> <h2 style="position:absolute; top: 25px; left: 97px; font-size: 30px; color:black; margin:auto;"><b>PNHS SHS-GIS</b></h2>
              <h1 style="font-size: 16px; align-text:center; margin-left: 30px; position:inherit; top: 10px; color:black; "><b>{{ config('app.name') }}</b></h1> 
            
           
            <hr>
        <div class="card-body login-card-body bg-dark rounded">
          

            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                           name="username"
                           value="{{ old('username') }}"
                           placeholder="Username"
                           class="form-control @error('username') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('username')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-info btn-block">Log in</button>
                    </div>

                </div>
            </form>

            <p class="mb-1">
                <a href="{{ route('password.request') }}", style=" font-size: 14px; color:cyan;">Forgotten your password?</a>
            </p>

            {{-- <p class="mb-0">
                <a href="{{ route('code') }}" class="text-center" style="color:cyan; font-size: 14px;">Register new account</a>
            </p> --}}
        
        </div>

        
        <!-- /.login-card-body -->
    </div>
     
    <h3 style="font-size: 18px; align-text:center; margin:auto; position:inherit; top: 8px; color: black; ">PANGANGAN NATIONAL HIGH SCHOOL <br>
        <p style="font-size: 15px; align-text:center; margin:auto; position:relative; left: 85px; color: dimgray;">Talisay, Calape, Bohol</p> <br>
    </h3>
</div>

</div>
{{-- <div id="masterlayout" class="fixed-bottom">
    <nav class="navbar navbar-expand navbar-dark ", style="height: 170px;">
        <div class="dd" style="align-text:center; margin:auto; position:inherit; top: 50px;">
     
           <h3 style="font-size: 21px; align-text:center; margin:auto; position:inherit; top: -60px; color:white; ">PANGANGAN NATIONAL HIGH SCHOOL <br>
            <p style="font-size: 15px; align-text:center; margin:auto; position:relative; left: 115px; color: silver;">Talisay, Calape, Bohol</p>  </h3>
            <img src="{{url('/images/contact.png')}}" width="30px" height="30px" style="margin:auto; position:relative; left:47px; top: -50px;">
            <img src="{{url('/images/gmail.png')}}" width="30px" height="30px" style="margin:auto; position:relative; left:270px; top: -50px;">
            <h4 style=" font-size: 15px; margin:auto; position:relative; left:10px; top: -50px; color:silver;">0916-529-4984
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pnhs302882@gmail.com
            </h4>
            <img src="{{url('/images/facebook.png')}}" width="30px" height="30px" style="margin:auto; position:relative; left:169px; top: -45px;">
             <h5  style=" font-size: 15px; margin:auto; position:relative; left:70px; top: -45px;"> <a href="https://www.facebook.com/pangangannationalhighschool" style="color:#0066ffff">@pangangannationalhighschool </a></h5> 
        </div>

    </div>
    </nav>

</div> --}}


<!-- /.login-box -->

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>


</body>
<div class="content">
   
</div>

<div class="box">
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

</html>


<style scoped>

    * {
	margin: 0px;
	padding: 0px;
}

.card{
    background-color: rgba(245, 245, 245, 1);
    opacity: .8;
}

.navbar{
    background-color: #292b2c;
    opacity: .9;
}

.back img{
   position:fixed;
   left: 1px;
    height: 100%;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
     background-size: cover;
}


.content {
	background: #000;
	height: 100vh;
	overflow: hidden;
}

.box ul li {
	position: absolute;
	width: 35px;
	height: 35px;
	list-style: none;
	opacity: 0;
	background: radial-gradient(white, transparent, transparent);
	bottom: 0;
	left: 10vw;
	animation: animate 15s linear infinite;
}
.box ul li:nth-child(2) {
	left: 30vw;
	animation-delay: 4s;
}
.box ul li:nth-child(3) {
	left: 22vw;
	animation-delay: 9s;
}
.box ul li:nth-child(4) {
	left: 70vw;
	animation-delay: 6s;
}
.box ul li:nth-child(5) {
	left: 79vw;
	animation-delay: 3s;
}
.box ul li:nth-child(6) {
	left: 82vw;
	animation-delay: 8s;
}
.box ul li:nth-child(7) {
	left: 80vw;
	animation-delay: 13s;
}
@keyframes animate {
	0% {
		transform: scale(0);
		opacity: 1;
		bottom: 0;
	}
	100% {
		transform: scale(10);
		opacity: 0;
		bottom: 100vh;
	}
}


</style>

