<?php
	if(!$_POST) {
		header('Location: /');
		exit();
	}

	//$link = mysqli_connect('localhost', 'root', 'root', 'worthington_sweeps');
	$link = mysqli_connect('localhost', 'worthington_jt', 'HFJdvJppBUM7KtH9', 'worthington_sweeps');

	if (!$link) {
		//die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		die('Could not connect to database.');
	}

	$name = mysqli_real_escape_string($link, $_POST['name']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$phone = mysqli_real_escape_string($link, $_POST['phone']);
	$company = mysqli_real_escape_string($link, $_POST['company']);
	$wsname = mysqli_real_escape_string($link, $_POST['wsname']);
	$wsstorenum = mysqli_real_escape_string($link, $_POST['wsstorenum']);
	$wsaddress = mysqli_real_escape_string($link, $_POST['wsaddress']);
	$installdateUF = date("Y-m-d", strtotime($_POST['installdate']));
	$installdate = mysqli_real_escape_string($link, $installdateUF);
	$image_file = mysqli_real_escape_string($link, $_POST['image_file']);

?>
<!doctype html>
<html>
<head>
<title>Summit Sweepstakes! :: Mansfield Plumbing Products</title>

<?php require_once('commonHeader.inc'); ?>

</head>

<body>
<div class="wrapper">

	<?php include_once('headerGraphics.inc'); ?>
	<div class="grid grid-pad">
		<div class="col-7-12">
			<div class="content">
				<h1 class="title"><label></label>Thanks!</h1>
<?php

	$imageFileName = mt_rand() . "-" . $_FILES['image_file']['name'];
	$image_file = mysqli_real_escape_string($link, $imageFileName);

	$sql  = "INSERT INTO `worthington_sweeps`.`entry` (`ent_id`, `ent_name`, `ent_email`, `ent_phone`, `ent_company`, `ent_wholesalername`, `ent_wholesalernum`, `ent_wholesaleraddr`, `ent_installdate`, `ent_photo`) VALUES ";
	$sql .= "(NULL, '" . $name . "', '" . $email . "', '" . $phone . "', '" . $company . "', '" . $wsname . "', '" . $wsstorenum . "', '" . $wsaddress . "', '" . $installdate . "', '" . $image_file . "')";

	$result = mysqli_query($link, $sql);

	mysqli_close($link);

	//$uploaddir = '/Users/joncole/Documents/Projects/Git Repositories/worthington-sweepstakes/web/sweepsuploads/';
	$uploaddir = '/var/www/html/worthingtonjoiningtech.com/installwin/sweepsuploads/';
	$uploadfile = $uploaddir . basename($image_file);


//	echo '<pre>';
	if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadfile)) {
		// Success
//		echo "File is valid, and was successfully uploaded.\n";
	} else {
		echo "Possible file upload attack!\n";
	}

//	echo 'Here is some more debugging info:';
//	print_r($_FILES);

//	print "</pre>";

?>
				<p><label> </label>Thank you for your entry!</p>
				<br />
			</div>
		</div>
		<div class="col-5-12 mobile-col-1-1">
			<?php include_once('rightColumn.inc'); ?>
		</div>
	</div>

</div>
</body>
</html>
