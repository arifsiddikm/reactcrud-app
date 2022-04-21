<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

require("connect.php");

// print_r($_POST);
$postdata = file_get_contents("php://input");

error_reporting(E_ERROR);
$project = [];

$sql = "SELECT * FROM tbl_project LIMIT 10";

if($result=mysqli_query($conn2, $sql)){
	$cr= 0;
	while($row= mysqli_fetch_assoc($result)){
		$project[$cr]['id_project'] = $row['id_project'];
		$project[$cr]['project_name'] = $row['project_name'];
		$project[$cr]['project_category'] = $row['project_category'];
		$project[$cr]['project_desc'] = $row['project_desc'];
		$cr++;
	}
	
	//retrieve data as a full array
	// print_r($project);
	
	//retrieve data in JSON format
	echo json_encode($project);
}
else{
	http_response_code(404);
}

?>