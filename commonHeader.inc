<meta charset="utf-8" />
<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js"></script>
	<script src="./js/selectivizr-min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="./simplegrid.css" />
<link rel="stylesheet" type="text/css" href="./mansfield_plumbing.css" />
<link rel="stylesheet" type="text/css" href="./jquery-ui-1.10.4.custom.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/additional-methods.min.js"></script>

<meta name="viewport" content="width=device-width; initial-scale=1.0">

<script>
	$(document).ready(function(){
		// Hide prize and rules panels initially
		$(".prizes").hide();
		$(".rules").hide();

		$( ".prizeLink" ).click(function() {
			$( ".rightColumn" ).fadeOut( "fast", function() {
				$( ".prizes" ).fadeIn( "fast" );
			});
		});

		$( ".rulesLink" ).click(function() {
			$( ".rightColumn" ).fadeOut( "fast", function() {
				$( ".rules" ).fadeIn( "fast" );
			});
		});

		$( ".btnclosePrizes" ).click(function() {
			$( ".prizes" ).fadeOut( "fast", function() {
				$( ".rightColumn" ).fadeIn( "fast" );
			});
		});

		$( ".btncloseRules" ).click(function() {
			$( ".rules" ).fadeOut( "fast", function() {
				$( ".rightColumn" ).fadeIn( "fast" );
			});
		});

		$('#image_file').change(function() {
			var filename = $('#image_file').val();
			$('#select_file').html(filename);
		});

		$(function() {
			$( "#installdate" ).datepicker();
		});

		$( "#submitButton" ).click(function() {
			$( "#sweepsForm" ).submit();
			if ($('#image_file').valid()) {
				//Valid
			} else {
				$('#select_file').html('<span style="color: red;">Please upload a valid file.</span>');
			}
		});

		$("#sweepsForm").validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					phoneUS: true
				},
				company: {
					required: true,
					minlength: 2
				},
				wsname: {
					required: true,
					minlength: 2
				},
				wsaddress: {
					required: true,
					minlength: 2
				},
				installdate: {
					required: true,
					date: true
				},
				image_file: {
					required: true,
					accept: "image/jpeg,image/png"
				}
			},
			messages: {
				/*name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					phoneUS: true
				},
				company: {
					required: true,
					minlength: 2
				},
				wsname: {
					required: true,
					minlength: 2
				},
				wsaddress: {
					required: true,
					minlength: 2
				},
				installdate: {
					required: true,
					date: true
				},
				image_file: {
					required: true,
					accept: "image/jpeg,image/png"
				}*/
			}
		});
	});

</script>
