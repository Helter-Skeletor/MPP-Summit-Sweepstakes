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
				<h1 class="title"><label></label> Entry Form</h1>
				<form enctype="multipart/form-data" action="finish.php" method="POST" id="sweepsForm">
					<label for="name">Your Name:</label> <input type="text" name="name" id="name" /><br />
					<label for="email">Email Address:</label> <input type="text" name="email" id="email" /><br />
					<label for="phone">Your Phone Number:</label> <input type="text" name="phone" id="phone" /><br />
					<label for="company">Company Name:</label> <input type="text" name="company" id="company" /><br />
					<label for="wsname">Wholesaler Name:</label> <input type="text" name="wsname" id="wsname" /><br />
					<label for="wsstorenum">Wholesaler Store Number:</label> <input type="text" name="wsstorenum" id="wsstorenum" /><br />
					<label for="wsaddress">Wholesaler Address:</label> <input type="text" name="wsaddress" id="wsaddress" /><br />
					<label for="installdate">Date of Install:</label> <input type="text" name="installdate" id="installdate" /><br />
					<div class="fileinputs">
						<input type="file" class="file" id="image_file" name="image_file" />
						<div class="fakefile">
							<img src="images/button_upload.png" alt="Upload Photo" id="uploadButton" />
							<div id="select_file">No file selected.</div>
						</div>
					</div><br />
					<label></label> <img src="images/button_enter.png" alt="Enter" style="margin-top: 7px;" id="submitButton" /><br />
				</form>
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
