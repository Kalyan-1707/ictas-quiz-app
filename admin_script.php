<?php


	require 'common.php';
	session_start();


    $red_attempts=0;
    $red_score=0;
    $blue_attempts=0;
    $blue_score=0;
    $green_attempts=0;
    $green_score=0;
    $yellow_attempts=0;
    $yellow_score=0;
    


    # Red

	$table_name='teama_results';
	$query = "SELECT * FROM $table_name";
	$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($query_result))
    {
    	if($row['attempt']=='Yes')
    		$red_attempts+=1;
    	if($row['correct']=='Yes')
    		$red_score+=$row['marks'];
    }



    #Blue

    $table_name='teamb_results';
    $query = "SELECT * FROM $table_name";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($query_result))
    {
    	if($row['attempt']=='Yes')
    		$blue_attempts+=1;
    	if($row['correct']=='Yes')
    		$blue_score+=$row['marks'];
    }

    #Green
    $table_name='teamc_results';
    $query = "SELECT * FROM $table_name";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($query_result))
    {
        if($row['attempt']=='Yes')
            $green_attempts+=1;
        if($row['correct']=='Yes')
            $green_score+=$row['marks'];
    }

    #Yellow
    $table_name='teamd_results';
    $query = "SELECT * FROM $table_name";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($query_result))
    {
        if($row['attempt']=='Yes')
            $yellow_attempts+=1;
        if($row['correct']=='Yes')
            $yellow_score+=$row['marks'];
    }


    $red_progress_val=0;
    $blue_progress_val=0;
    $green_progress_val=0;
    $yellow_progress_val=0;


    $table_name='submissions';
    $query = "SELECT * FROM $table_name  ";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));  
    while($row=mysqli_fetch_array($query_result))
    {
    	if($row['username']=='teama')
    		$red_progress_val+=1;
    	if($row['username']=='teamb')
    		$blue_progress_val+=1;
        if($row['username']=='teamc')
            $green_progress_val+=1;
        if($row['username']=='teamd')
            $yellow_progress_val+=1; 
     }                         
    $red_progress_percentage=(int)(($red_progress_val/15)*100);
    $blue_progress_percentage=(int)(($blue_progress_val/15)*100);
    $green_progress_percentage=(int)(($green_progress_val/15)*100);
    $yellow_progress_percentage=(int)(($yellow_progress_val/15)*100);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    .divSquare{
    	padding-left: 10px;
        width:48%; height:200px; margin:4px; border:1px solid black; float: left
    }
</style>
</head>
<body>

<br>
<br>
<br>
<br>
<div class="container">
<label>Red</label>
<center>
	<label>Questions Attempted - <?php echo $red_attempts;?></label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<label>Not Attempted - <?php echo (15-$red_attempts);?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Score - <?php echo ($red_score);?></label>
	<div class="container">
	<div class="progress">
  <div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar"
  aria-valuenow="<?php echo$red_progress_percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo$red_progress_percentage;?>%">
    <?php echo$red_progress_percentage;?>%
  </div>
</div>
</div>
</center>
</div>




<div class="container">
<label>Blue</label>
<center>
	<label>Questions Attempted - <?php echo $blue_attempts;?></label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<label>Not Attempted - <?php echo (15-$blue_attempts);?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Score - <?php echo ($blue_score);?></label>
	<div class="container">
	<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="<?php echo$blue_progress_percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo$blue_progress_percentage;?>%">
    <?php echo$blue_progress_percentage;?>%
  </div>
</div>
</div>
</center>
</div>


<div class="container">
<label>Green</label>
<center>
    <label>Questions Attempted - <?php echo $green_attempts;?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Not Attempted - <?php echo (15-$green_attempts);?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Score - <?php echo ($green_score);?></label>
    <div class="container">
    <div class="progress">
  <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar"
  aria-valuenow="<?php echo$green_progress_percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo$green_progress_percentage;?>%">
    <?php echo$green_progress_percentage;?>%
  </div>
</div>
</div>
</center>
</div>

<div class="container">
<label>Yellow</label>
<center>
    <label>Questions Attempted - <?php echo $yellow_attempts;?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Not Attempted - <?php echo (15-$yellow_attempts);?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Score - <?php echo ($yellow_score);?></label>
    <div class="container">
    <div class="progress">
  <div class="progress-bar progress-bar-striped active progress-bar-warning" role="progressbar"
  aria-valuenow="<?php echo$yellow_progress_percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo$yellow_progress_percentage;?>%">
    <?php echo$yellow_progress_percentage;?>%
  </div>
</div>
</div>
</center>
</div>














<center>

<div class="">
                <div class="">
                <div class="row">
                <div class=" col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
                <table class="table table-bordered">
                    <tbody >
                        
                        <tr>
                            
                            <th>Team</th>
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
                                $table_name='submissions';
    							$query = "SELECT * FROM $table_name  ";
    							$query_result = mysqli_query($con, $query) or die(mysqli_error($con));  
    

                                    while($row=mysqli_fetch_array($query_result)){  
                                ?>

                            <tr>
                            
                            <td align="center"><?php echo $row['username'];?></td>
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