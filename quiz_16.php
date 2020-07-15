<?php


	require 'common.php';
	session_start();

	$attempts=0;
	$score=0;

	$table_name=$_SESSION['user_id'].'_results';
	$query = "SELECT * FROM $table_name";
	$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($query_result))
    {
    	if($row['attempt']=='Yes')
    		$attempts+=1;
    	if($row['correct']=='Yes')
    		$score+=$row['marks'];
    }

    
?>
















<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <li class="btn btn-t"><a href="logout.php">Log Out</a></li>
            </center>

        </ul>
            </div>
        </div>
        </nav>
















<br>
<br>
<br>
	<center>
	<label>Questions Attempted - <?php echo $attempts;?></label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<label>Not Attempted - <?php echo (15-$attempts);?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Score - <?php echo ($score);?></label>
    </center>
<center>

<div class="">
                <div class="">
                <div class="row">
                <div class=" col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
                <table class="table table-bordered">
                    <tbody >
                        
                        <tr>
                            
                            <th>Question</th>
                            <th>Correct</th>
                                
                        </tr>

                        <?php
                            
                            if(1)
                            {
                                $sum=0;
                                $count=1;                   
                                $name=array();
                                $price=array();
    							$query = "SELECT * FROM $table_name  ";
    							$query_result = mysqli_query($con, $query) or die(mysqli_error($con));  
    

                                    while($row=mysqli_fetch_array($query_result)){  
                                ?>

                            <tr>
                            
                            <td align="center"><?php echo $row['question'];?></td>
                            <td align="right"><?php echo $row['correct'];?></td>
                                
                            </tr>
                            <?php $count=$count+1;}
                        }?>

                        
                    </tbody>

                </table>
                </div>
                </div>
                </div>
                </div>



      </center>


</body>
</html>