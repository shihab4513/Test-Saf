<?php
	$connect = mysqli_connect('localhost', 'root', '', 'spring2025_assignment', 3306)
    or die("Can not connect to DB");
	


	$results = mysqli_query( $connect, "SELECT * FROM Teacher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>ID</th> <th>Name</th> <th>Course ID</th>  \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $teacher_id </td>";
		echo "<td> $name </td>";
		echo "<td> $course_id </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

    echo "<p><a href=index.html>Return to Main Page</a>";

    echo "<p><a href=updateCourseTemplate.php>Update a new Course to a Teacher</a>";
?>