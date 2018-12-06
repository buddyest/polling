<?php
include('config/database.inc.php');
$sid=$_GET['sid'];
 $sql=mysqli_query($con,"select * from constituency where sid='$sid'");
/*if(mysqli_num_rows($sql)){*/
	$data = array();
	while($row=mysqli_fetch_array($sql,MYSQLI_NUM)){
		$data[] = array(
		 'cid' => $row[0],
			'sid' => $row[2],
		 'cname' => $row[1]
		);
	}
	header('content-type: application/json');
	echo json_encode($data);
//}
?>