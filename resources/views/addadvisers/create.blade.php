@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>

</head>
<body>
    


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


                        
                        <form action="{{url('add-adviser')}}" class="contact-form"  method="POST" enctype="multipart/form-data" style="color:dimgray;">
                         @csrf
                          
                         <div class="form-section">
                              <label for="">Role</label>
                               <input type="text" name="usertype" class="form-control" required>
                       
                               <label for="">Advisory</label>
                               <input type="text" name="advisory" class="form-control" required>
                        
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control"  required>
                           
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control"  required>
                            </div>

                            <div class="form-section">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control"  required>
                        
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control"  required>
                           
                                <label for="">Contact No</label>
                                <input type="text" name="contact_no" class="form-control"  required>
                           
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control"  required>
                            </div>
                     
                               <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info float-right">Next</button>    
                                <button type="submit" class="btn btn-success float-right">Save</button>
                            </div>
                              
                             
                        </form>
                                      
                     </div>
                 </div>
             </div>
         </div>
     </div>

    <script>
        $(function(){
            var $sections = $('.form-section');

            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex(){
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function(){
                navigateTo(curIndex()-1);
            });
            $('.form-navigation .next').click(function(){
                $('.contact-form').parsley().whenValidate({
                        group: 'block-' + curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function(index,section){
                $(section).find(':input').attr('data-parsley-group','block-'+index);
            });

            navigateTo(0);

        });
    </script>

    </body>
    </html>

    <style scoped>
        .section{
            padding-top:100px !important;
        }
        .form-section{
            padding-left:15px;
            display: none;
        }
        .form-section.current{
            display: inherit;
        }
        .btn-info, .btn-success{
            margin-top:10px;
        }
        .parsley-error-list{
            margin: 2px 0 3px;
            padding: 0;
            list-style-type:none;
            color:red;
        }
    </style>

@endsection