<?php
	session_start();
	require 'common.php';


	$ans = array("Missing Number.."=>"1440", "Multiplies of 3 and 5"=>"233168","Even Fibonacci numbers"=>"4613732","Largest prime factor"=>"6857","Largest palindrome product"=>"906609","Smallest multiple"=>"	232792560","Sum square difference"=>"25164150","10001st prime"=>"104743","Special Pythagorean triplet"=>"31875000","circular track"=>"12","Train Vs Car"=>"4.5","Knave Vs Knight Vs Spy"=>"B","Sugar"=>"3:10","Wheel Revolution"=>"39900","Gift"=>"200000");

	$val=$_POST['q1'];

	$ques_val=$_POST['question'];

	$next_page=$_POST['quest_no']+1;


	$correct_val='No';


	if($val==$ans[$ques_val])
	{
		$correct_val='Yes';
	}
	else
	{
		$correct_val='No';
	}


	$table_name=$_SESSION['user_id'];

	$table_name=$table_name.'_results';


	$query = "UPDATE $table_name SET attempt='Yes',correct='$correct_val' WHERE question='$ques_val'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    


    $query ="INSERT INTO `submissions` (`username`, `question`, `answer`,`correct`, `id`) VALUES ('".$_SESSION['user_id']."', '".$ques_val."', '".$val."','".$correct_val."', NULL)";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    
    $next_page='location:'.'quiz_'.$next_page.'.php';
    header($next_page);

?>