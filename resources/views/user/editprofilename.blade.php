@extends('userlayouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
</head>
<body>
    
</body>
</html>

     <div class="container">
         <div class="row">
             <div class="col-md-6" style="margin:auto; top: 10px;">


                 <div class="card elevation-2">
                     <div class="card-header bg-info elevation-2">
                         <h4 style="position: relative; left:25%; color:white; top: 10px;">Edit Your Informations</h4>
                        
                     </div>
                     <div class="card-body">

                        <form action="{{url('userupdate-user/'.$user->id)}}" method="POST">
                         @csrf
                         @method('PUT')
                         

                         <div class="form-group mb-3">
                            <label for="" style="color:dimgray;">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                        </div>
                         <div class="form-group mb-3">
                            <label for="" style="color:dimgray;">Advisory</label>
                            <input type="text" name="advisory" value="{{$user->advisory}}" class="form-control">
                        </div>
                            <div class="form-group mb-3">
                                <label for="" style="color:dimgray;">Email</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" style="color:dimgray;">Address</label>
                                <input type="text" name="address" value="{{$user->address}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" style="color: dimgray;">Contact Number</label>
                                <input type="text" name="contact_no" value="{{$user->contact_no}}" class="form-control">
                            </div>

                             <div class="form-group mb-3">
                                <a href="{{url('usereditprofile')}}" class="btn btn-danger" style="position:relative; margin:auto; left:35px;" >Back</a>
                                 <button type="submit" class="btn btn-info" style="position: relative; margin:auto; left:250px;">Update</button>
                               

                             </div>

                        </form>
                         
                        
                     </div>
                 </div>
             </div>
         </div>
     </div>








@endsection