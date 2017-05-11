<?php 
	
	$text = $_POST["text"];
	$state = $_POST["state"];
	$success = $_POST["success"];
	
	include("db.php");
	
	if( $state==0 && $success == 0 && $text != ""){
		$query = mysql_query("insert into ajax_status (response_text) values('".$text."')") or die("Problem in inserting  ");
		//echo "insert into ajax_status (response_text) values('".$text."')";
	}
	
	if ($text==0 && $success == 0 && $state !=0){
		$query = mysql_query("update ajax_status set ready_state='".$state."' ORDER BY sno DESC LIMIT 1") or die("Problem in updating  ");
		//echo "update ajax_status set ready_state='".$state."' ORDER BY sno DESC LIMIT 1";
	}
	if ($text==0 && $success !=0 && $state ==0){
		$query = mysql_query("update ajax_status set status='".$success."' ORDER BY sno DESC LIMIT 1") or die("Problem in updating  ");
		//echo "update ajax_status set status='".$success."' ORDER BY sno DESC LIMIT 1";
		$success = mysql_query("select sno,ready_state,response_text,status from ajax_status WHERE sno = (SELECT MAX(sno) FROM ajax_status)") or die("Problem in updating  ");
		for($i=0;$i<count($success);$i++){
		$row = mysql_fetch_array($success);	
		
		}
		
		//print_r($row);
	}
	$table="<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>";
	echo $table;
	
	
	
?>