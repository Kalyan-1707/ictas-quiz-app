<!DOCTYPE html>
<html>
<head>
	<title>ICT@S</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        	.s{
        		background-color: white;
        	}
        	a{
        		font-style: bold;
        	}
        </style>
</head>
<body>
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
      
            </div>
        </div>
    </nav>
	<div class="s">
	
	<center>
		<h1>ICT@S</h1>
		<h4>Do or Die</h4>
</center>
<div class="instruction_page">
          <div class="instruction_header">
            <h3>
              You are about to start the test
            </h3>
          </div>
          <div class="instructions_list">
            <div class="instruction_header">
            
              <h4>
                Instructions
              </h4>
            </div>
            <div class="instructions__step ng-binding" ng-bind-html="vm.instructions">
<ol start="1" type="1"> <li>Total duration of this test is <b>45 minutes</b>.</li>
<li>There will be <b>7 Single Option Correct MCQ questions.Each Carries 3 Marks.</b></li>
<li>There will be <b>8 Numerical Questions.Each Carries 5 Marks.</b></li>
</ol></div>
          </div>
          <div class="instructions__check" style="display: block">
          </div>
          <guest-user-data-warning-popup show="vm.show_guest_user_warning_popup" startclick="vm.start(true)" class="ng-isolate-scope">
  <div class="guest-user-warning-popup">
    <modal show-close-button="false" visible="show" class="ng-isolate-scope">
  <div class="modal__container" ng-class="visible &amp;&amp; 'visible'" ng-click="visible = !closeOnOuterClick">
    <!-- ngIf: showCloseButton -->
    <div class="modal__tranclude" ng-click="$event.stopPropagation()" ng-transclude="true">
    
      <div class="submit-btns ng-scope">
      	 <center>
        <button class="btn btn-info" ><a href="quiz_1.php">Start</a></button>
        </center>
      </div>
 
    </div>
  </div>
</modal>
  </div>
</guest-user-data-warning-popup>
        </div>
</div>
</body>
</html>