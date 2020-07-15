<?php

    require 'common.php';
    session_start();

    $quest='circular track';

    $quest_no=4;


    $table_name=$_SESSION['user_id'].'_results';
    $query = "SELECT * FROM $table_name where question='".$quest."' ";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));  
    $row = mysqli_fetch_array($query_result);


?>
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
            .btn-t{
                background-color: transparent;
            }
            .nav-item{
                color: white;
            }
            .attempted{
                display: none;
            }
            ul{
                padding-right: 40px;
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
                <a href="index.html" class="navbar-brand"><?php echo $_SESSION['user_id'];?></a>
                         </div>
  
        <div class="collapse navbar-collapse navbar-right" id=mynavbar > 

            <center>
                <ul class="navbar-nav">

            <?php
                    $i=1;
                    while($i<=15)
                    {?>
            <li class="nav-item" style="list-style-type: none;background-color: transparent; padding: 5px">
                <button class="btn btn-t" style=""><a href="quiz_<?php echo $i;?>.php" style="text-decoration: none;"><?php echo $i;?></a></button>
            </li>
            <?php
            $i+=1;}?>

            </center>

        </ul>
            </div>
        </div>
        </nav>

        <br><br>
        <br>
        <br>

    
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading"><?php echo $quest;?></div>
            <form class="form-group" action="quiz_script.php" method="post">
            <div class="panel-body">
                <label for="q1"><pre>Three friends started running together on a circular track at 8:00:00 am. 
Time taken by them to complete one round of the track is 15 min, 20 min, 30 min respectively. 
If they run continuously without any halts, then at what time will they meet again at the starting point for the fourth time ?
        </pre></label>
    
        <br>
        <div class="<?php if($row['attempt']=='Yes') {echo "attempted";}?>">
        <div class="radio ">
            <label><input type="radio" name="q1" value="8.3">8:30:00 am</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="q1" value="9">9:00:00 am</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="q1" value="12">12:00:00 am</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="q1" value="11">11:00:00 am</label>
        </div>
        </div>
        <?php
        if($row['attempt']=='Yes')
        {
        echo "<center><label>Attempted</label><center>";
        }
        ?>
        </div>
    </div>
       <input type="number" name="quest_no" value="<?php echo $quest_no;?>" style="display: none;">
     
    </div>
    
    <input type="text" name="question" value="<?php echo $quest;?>" style="display: none;">
    
    <div class="panel-footer " style="background-color: transparent;margin: none;border: none;">
        <button class="col-xs-offset-5 btn btn-success <?php if($row['attempt']=='Yes') {echo "attempted";}?>">Submit</button>
        <button class="col-xs-offset-5 btn btn-info" type="button">
        <a href="quiz_<?php echo $quest_no+1?>.php" style="text-decoration:none;">
        Next
        </a>
        </button>
        </div>
        
        </form>
</div>


</center>
</body>
</html>




























