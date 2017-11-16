<?php
	$con=mysqli_connect("localhost","root","","cloud")
		or die(mysqli_error($con));
		$disease = $_POST['disease'];
		$symptom1 = $_POST['symptom1'];
		$symptom2 = $_POST['symptom2'];
		$symptom3 = $_POST['symptom3'];
		$input_query = "insert into dataset(disease_id,symptom1_id,symptom2_id,symptom3_id) values('$disease','$symptom1','$symptom2','$symptom3')";
		$input_submit = mysqli_query($con,$input_query)
			or die(mysqli_error($con));


?>

