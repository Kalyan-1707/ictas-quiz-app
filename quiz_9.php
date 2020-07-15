<?php


    require 'common.php';
    session_start();

    $quest='Smallest multiple';

    $quest_no=9;

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
            .unattempted{
                display: block;
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
            <div class="panel-body"><label for="q1">2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?</label>
    
        <br>
        <div class="col-xs-offset-4 col-xs-3 <?php if($row['attempt']=='Yes') {echo "attempted";}?>">
            <br><br><input type="number" name="q1" class="form-control">
        
        </div>
        <?php
        if($row['attempt']=='Yes')
        {
        echo"<center><label>Attempted</label></center>";
        }
        ?>
    </div>
        
    </div>

        <input type="number" name="quest_no" value="<?php echo $quest_no;?>" style="display: none;">
    
        <input type="text" name="question" value="<?php echo $quest;?>" style="display: none;">
    <div class="panel-footer" style="background-color: transparent;margin: none;border: none;">
        <button class="col-xs-offset-5 btn btn-success <?php if($row['attempt']=='Yes') {echo "attempted";}?>">Submit</button>
        <button class="col-xs-offset-5 btn btn-info " type="button">
            <a href="quiz_<?php echo $quest_no+1?>.php" style="text-decoration:none;">Next</a></button>
        </div>
        </form>
</div>


</center>
</body>
</html>




























