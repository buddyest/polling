<?php
include('config/database.inc.php');
 $sql=mysqli_query($con,"select * from states");
/*if(mysqli_num_rows($sql)){*/
	$data = array();
	while($row=mysqli_fetch_array($sql,MYSQLI_NUM)){
		$data[] = array(
		 'id' => $row[0],
		 'name' => $row[1]
		);
	}
	header('content-type: application/json');
	echo json_encode($data);
//}
?>