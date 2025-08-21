<?php
	$connect = mysqli_connect('localhost', 'root', '', 'spring2025_assignment', 3306)
    or die("Can not connect to DB");


	$results = mysqli_query( $connect, "SELECT * FROM Course" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Course ID</th> <th>Name</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_id </td>";
		echo "<td> $title </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=createCourseTemplate.php>Create a new Course</a>";


    echo "<p><a href=index.html>Return to Main Page</a>";

    

?>