@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    
        



           <h1 style="color:dimgray; font-size:25px; margin-left:20px; position:relative; top:15px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Dashboard</h1>
      

          <div class="cardBox">
            <div class="card elevation-2">
                <div class="iconBx">
                    <ion-icon name="clipboard-outline"></ion-icon>
                </div>
                <div>
                    <div class="cardName" >Advisers</div>
                    <div class="numbers" >5</div>
                </div>
            </div>
            <div class="card elevation-2">
                <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
                <div>
                    <div class="cardName" >Grade 11 Students</div>
                    <div class="numbers">115</div>
                </div>
            </div>
            <div class="card elevation-2">
                <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
                <div>
                    <div class="cardName" >Grade 12 Students</div>
                    <div class="numbers" >85</div>
                </div>
            </div>
          
            <div class="card elevation-2">
                <div class="iconBx">
                    <ion-icon name="person-outline"></ion-icon>
                </div>
                <div>
                    <div class="cardName" >Administrator</div>      
                    <div class="numbers" >1</div>
               
                </div>
            </div>
          </div>


          
            <div class="card elevation-2 rounded" style="width: 445px; height:300px; margin-left:20px;">
                <div class="card-header bg-info elevation-2">
                    <h2 style="color: #262626">Admin Profile</h2><i class="fas fa-user" style="color:#262626; position:absolute; left: 125px; margin:auto; top:13px; font-size:16px;"></i>
                    <a href="{{url('/admineditprofile.php')}}" class="btn btn-sm btn-dark" style=" color:white; position:absolute; margin:auto; 
                    left:330px; top: 6px;">Update Profile</a>  </div>
                  <div class="card-body">
                   <p style="color: #262626; font-weight:bold; font-size:22px; margin-top: 30px;">Welcome {{ Auth::user()->name }}</p>
                   <p style="color: #262626; font-weight:normal; font-size:16px; margin-top:20px;">Pangangan National High School</p>
                   <p style="color: dimgray; font-weight:normal; font-size:16px; margin-top: -20px; ">Talisay, Calape, Bohol</p>
                </div>

              
        
          </div>
          
          

          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        </body>
        </html>




<style scoped>

    .cardBox{
        position: relative;
        width: 100%;
        color: black;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(4,1fr); 
        grid-gap: 25px;
    }
    .cardBox .card{
        position: relative;
      
        padding: 10px;
        border-radius: 15px;
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        box-shadow:  0 7px 25px rgba(0, 0, 0, 0.08);  
    }

    .cardBox .card .numbers{
        position: relative;
        font-weight: 700;
        font-size: 1.5em;
        color: #39C0ED;
    }

    .cardBox .card .cardName{
        color: #262626;
        font-size: 1.0em;
        margin-top: 5px;

    }

    .cardBox .card .iconBx{
        font-size: 2.5em;
        color: dimgray;
        
    }

    .cardBox .card:hover{
        background-color: #39C0ED;
    }

    .cardBox .card:hover .numbers,
    .cardBox .card:hover .cardName,
    .cardBox .card:hover .iconBx {
        color: white;
    }


    /* .details{
        position:relative;
        width: 80%;
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-gap: 20px;
        margin-top: -20px;

    }

    .details .user{
        position: relative;
        display: grid;
        min-height: 500px;
        background: white;
        padding: 20px;
        box-shadow: 0 7px 25px rgba(0,0,0,0.08);
        border-radius: 20px;
    } */

  

</style>
@endsection
