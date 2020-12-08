<!DOCTYPE html>
<html>
<body>
<?php
	
	if(isset($_POST['submit'])) {
		$salutation=$_POST['salutation'];
		echo "Salutation: ".$salutation."<br/>";
		$firstName=$_POST['first'];
		echo "First Name: ".$firstName."<br/>";
		$middleName=$_POST['middle'];
		echo "Middle Name: ".$middleName."<br/>";
		$lastName=$_POST['last'];
		echo "Last Name: ".$lastName."<br/>";
		$address1=$_POST['address1'];
		echo "Address1: ".$address1."<br/>";
		$address2=$_POST['address2'];
		echo "Address2: ".$address2."<br/>";
		$city=$_POST['city'];
		echo "City: ".$city."<br/>";
		$state=$_POST['state'];
		echo "State: ".$state."<br/>";
		$zip=$_POST['zip'];
		echo "Zip: ".$zip."<br/>";
		$phone=$_POST['phone'];
		echo "Phone: ".$phone."<br/>";
		$gender=$_POST['gender'];
		echo "Gender: ".$gender."<br/>";
	}

?>
</body>
</html>