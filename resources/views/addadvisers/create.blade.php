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
             <div class="col-md-6" style="positon:relative; top:10px; margin:auto;">

                @if (session('status'))
                <h6 class="alert alert-success"style="position: relative; margin-top:4%;">
                  {{session('status')}}
                </h6>
                    
                @endif

                 <div class="card elevation-4">
                     <div class="card-header bg-info elevation-2">
                         <h4 style="position: absolute; left:34%; color:whitesmoke; margin:auto;">Add New Adviser</h4>
                         <a href="{{url('advisers')}}" class="btn btn-danger float-start" >Back</a>
                     </div>
                     <div class="card-body">

                        <form action="{{url('add-adviser')}}" method="POST" enctype="multipart/form-data" style="color:dimgray;">
                         @csrf
                          
                         <div class="form-group mb-3">
                            <label for="">Role</label>
                            <input type="text" name="usertype" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Advisory</label>
                            <input type="text" name="advisory" class="form-control">
                        </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Contact No</label>
                                <input type="text" name="contact_no" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            
                             <div class="form-group mb-3">
                                 <button type="submit" class="btn btn-success" style="position: relative; left:86%;">Save</button>

                             </div>

                        </form>
                         
                        
                     </div>
                 </div>
             </div>
         </div>
     </div>








@endsection