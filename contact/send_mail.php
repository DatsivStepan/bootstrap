<?php 
	if(mail("datsivStepan@ukr.net", $_POST['subject'], $_POST['name']." \ ".$_POST['email']." \ ".$_POST['message'])){
		echo json_encode('good');
	}else{
		echo json_encode('bed');
	}
		
?>