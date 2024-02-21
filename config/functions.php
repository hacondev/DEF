<?php
require_once 'database.php';

function display_data(){
		global $con;
        $query = "SELECT * FROM Books ORDER BY id DESC";
        $result = mysqli_query($con, $query);		
		return $result;
	}
	
function add_item($title, $author, $type){
		global $con;
        $query = "INSERT INTO Books(title, author, type) VALUES('".$title."','".$author."','".$type."')";
		if (mysqli_query($con, $query)) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $query . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
	
function del_item($del_id){
		global $con;
        $query = "DELETE FROM Books WHERE id=".$del_id."";
		if (mysqli_query($con, $query)) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error: " . $query . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
	
function edit_item($title, $author, $type, $id){
		global $con;
        $query = "UPDATE Books SET title='".$title."', author='".$author."', type='".$type."' WHERE id='".$id."'";
		if (mysqli_query($con, $query)) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error: " . $query . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
?>