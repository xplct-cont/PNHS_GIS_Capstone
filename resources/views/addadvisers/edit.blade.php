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
             <div class="col-md-6"  style="positon:relative; top:10px; margin:auto;">

                @if (session('status'))
                <h6 class="alert alert-success" style="position: relative; margin-top:4%;">
                  {{session('status')}}
                </h6>
                    
                @endif

                 <div class="card elevation-4" style="height: 530px;">
                     <div class="card-header bg-info elevation-2">
                         <h4 style="position: absolute; left:25%; color:whitesmoke;">Edit Adviser Permissions</h4>
                         <a href="{{url('advisers')}}" class="btn btn-danger float-start" >Back</a>
                     </div>
                     <div class="card-body">

                        <form action="{{url('update-adviser/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         

                          <div class="card bg-dark">
                            
                            <div class="form-group mb-1">
                                <div class="bb">
                                    <img src="{{url('/images/bbbbb.png')}}" style="position:absolute; height:100%; width:100%; background-position:center; background-repeat:no-repeat; background-size: cover;  ">
                            </div>
                                <img src="{{asset('images/avatars/'.$user->avatar)}}" class="img-circle elevation-4" style="background-color:#5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px; position: relative; left: 0px; margin:auto; width:100px; height:100px; border-radius:50%;">
                                {{-- <label for="" style="color:dimgray;"></label>
                                <input type="file" name="avatar" > --}}
                            </div>
                        </div>
                            <hr>
                            <div class="form-group mb-3" style="position:relative; margin:auto; left: 100px;">
                                <label for="" style="color:dimgray;">Role</label>
                                <input type="text" name="usertype" value="{{$user->usertype}}" class="form-control" style="width: 200px;">
                            </div>
                            <div class="form-group mb-3"  style="position:relative; margin:auto; left: 100px;">
                                <label for="" style="color:dimgray;">Advisory</label>
                                <input type="text" name="advisory" value="{{$user->advisory}}" class="form-control" style="width: 200px;">
                            </div>
                            <div class="form-group mb-3"  style="position:relative; margin:auto; left: 100px;">
                                <label for="" style="color:dimgray;">Username</label>
                                <input type="text" name="username" value="{{$user->username}}" class="form-control" style="width: 200px;">
                            </div>
                            {{-- <div class="form-group mb-3" >
                                <label for="" style="color:dimgray;">Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" style="width: 195px;">
                            </div>
                            <div class="form-group mb-3" >
                                <label for="" style="color:dimgray;">Address</label>
                                <input type="text" name="address" value="{{$user->address}}" class="form-control" style="width: 195px;">
                            </div>
                            <div class="form-group mb-3" >
                                <label for="" style="color:dimgray;">Contact No</label>
                                <input type="text" name="contact_no" value="{{$user->contact_no}}" class="form-control" style="width: 195px;">
                            </div> --}}


                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-success" style="position: relative; left:80%;">Update</button>

                            </div>
                        </form>
                         
                        
                     </div>
                 </div>
             </div>
         </div>
     </div>








@endsection