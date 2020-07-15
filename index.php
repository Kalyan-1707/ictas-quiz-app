<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ICT@S</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>.mySlides{display: none;}
        .form-inline{
            color:rgb(201, 197, 190);
        background-color:rgb(24, 26, 27);
        }
    
    #slide_bg{
            width: 100%;
            height: 100vh;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            backface-visibility: hidden;
            animation: slidebg 8s linear infinite 0s;
            animation-timing-function: ease-in-out;
            background-image: url('pic1.jpg');
        }
                
                .panel-transparent {
                    background: none;
                    }
                    
                    .panel-visibility{
                        display:none;
                    }  
    
                @media only screen and (max-width: 768px){
                    .panel-size{
                     padding-top:35%;
                     float:bottom;
                    }
                }
                
                
                
    </style>
    </head>
    
    <body>
        
        <div class="">
            <nav class="navbar navbar-inverse navbar-static-top" style="margin:0px;">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                        </button>    
                <a href="index.html" class="navbar-brand">ICT@S</a>
                         </div>
  
        <div class="collapse navbar-collapse" id=mynavbar>      
        <form class="nav navbar-right form-inline form-group" action="index_script.php" method="post" style="padding: 10px; background-color: transparent;">
                            
            <label for="username" style="  color:white;" class="nav-item">Username</label>&nbsp;
            <input type="text" name="username" id="email" class="form-control nav-item" placeholder="Username" required="true">
            <label for="password" style="  color: white;" class="nav-item">Password</label>&nbsp;
            <input type="password" name="password" id="password" class="form-control nav-item" placeholder="password" id="pd" required="true">&nbsp;
            <button class="btn form-control nav-item" style="background-color: orange; color: black">Login</button>
            </form> 
            </div>
        </div>
        </nav>
<div id="slide_bg">
    
</div>
    </div>    
    </body>
</html>
