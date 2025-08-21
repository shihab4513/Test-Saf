<?php

	$id = $_GET["t_id"];

	$course = $_GET["c_id"];

    $connect = mysqli_connect('localhost', 'root', '', 'spring2025_assignment', 3306)
    or die("Can not connect to DB");



	$query 	= "INSERT INTO Course (course_id, title) VALUES ('$id', '$course')";

	
	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "<p> Updated the new course $course to the teacher with id $id";


    echo "<p><a href=index.html>Return to Main Page</a>";

?>



