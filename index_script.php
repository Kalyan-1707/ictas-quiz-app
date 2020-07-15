<?php
    require 'common.php';
    session_start();
	$username = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($query_result);
    $total_rows_fetched = mysqli_num_rows($query_result);
    if($username=="admin")
    {
        if($pwd==1707)
            header('location:admin_script.php');
        else
            header('location:index.php?s=incorrect_admin');
    }
    else if($total_rows_fetched == 0)
    {

        header('location: index.php?s=username');
    }
    else if($total_rows_fetched == 1)
    {
        if($pwd != $row['password'])
        {
        	
            header('location: index.php?s=Password');
        }
        elseif($pwd == $row['password'])
        {
        	
            $_SESSION['user_id']=$username;
            header('location: start.php');
        }
    }



    ?>