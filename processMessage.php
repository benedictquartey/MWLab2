
<?php

	$ok = true;
	//$phone_numbers = array();
	if($_SERVER["REQUEST_METHOD"] =="POST"){

		//Check if the telephone numbers were entered

		if(isset($_POST['phone_numbers']) && ($_POST['phone_numbers'] !=" ")){

			$phone_numbers = (explode(',',$_POST['phone_numbers']));
			//echo "$phone_numbers";
		}
		else{
			$ok = false;
			
		}

		if($ok &&(isset($_POST['phone_numbers']) && ($_POST['phone_numbers'] !=" "))){
			
		}
	}


 ?>