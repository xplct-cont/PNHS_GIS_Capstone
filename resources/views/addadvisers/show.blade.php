@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>
<body>
    
</body>
</html>

     <div class="container">
         <div class="row">
             <div class="col-md-7"  style="positon:relative; top:10px; margin:auto;">

                 <div class="card elevation-2" style="height: 540px;">
                     <div class="card-header bg-dark elevation-2">
                         <h4 style="position: absolute; left:33%; color:whitesmoke; margin:auto;">Adviser Informations</h4>
                         <a href="{{url('advisers')}}" class="btn btn-danger float-start text-white">Back</a>
                     </div>
                     <div class="card-body">

                        <form action="{{url('show-adviser/'.$user->id)}}" method="GET" enctype="multipart/form-data">
                         @csrf
                         @method('GET')
                         
                         <div class="bb">
                                <img src="{{url('/images/bbbbb.png')}}" style="position:relative; height:100%; width:100%; background-position:center; background-repeat:no-repeat; background-size: cover;  ">
                        </div>
                                <img src="{{asset('images/avatars/'.$user->avatar)}}" class="img-circle elevation-4"  style=" margin:auto; position:relative; top: -60px; left: 30px; margin:auto; width:130px; height:130px; border-radius:50%;
                                 background-color:#5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;" >
                               
                                 <div class="card elevation-4 bg-dark" style="height: 210px; margin-top:-43px;">
                                 <p style="color: 	#F5FFFA; position: relative; font-size: 16px; margin-left:20px; top: 20px;" >Name:&nbsp;&nbsp;{{$user->name}}</p>
                                 <p style="color: 	#F5FFFA; position: relative;  font-size: 16px; margin-left:20px; top: 2px;" >Username:&nbsp;&nbsp;{{$user->username}}</p>
                                 <p style="color: 	#F5FFFA; position: relative;  font-size: 16px; margin-left:20px; top: -15px;" >Role:&nbsp;&nbsp;{{$user->usertype}}</p>
                                 <p style="color: 	#F5FFFA; position: relative;  font-size: 16px; margin-left:20px; top: -33px;" >Advisory:&nbsp;&nbsp;{{$user->advisory}}</p>
                                 <p style="color: 	#F5FFFA; position: relative;  font-size: 16px; margin-left:20px; top: -52px;" >Email:&nbsp;&nbsp;{{$user->email}}</p>
                                 <p style="color: 	#F5FFFA; position: relative;  font-size: 16px; margin-left:20px; top: -70px;" >Address:&nbsp;&nbsp;{{$user->address}}</p>
                                 <p style="color: 	#F5FFFA; position: relative;  font-size: 16px; margin-left:20px; top: -88px;" >Contact No:&nbsp;&nbsp;{{$user->contact_no}}</p>
                                </div>
                        
                        </div>
                        </form>
                         
                        
                     </div>
                 </div>
             </div>
         </div>
     </div>








@endsection