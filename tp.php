<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

		$did=$_POST['did'];
		$Fname=$_POST['fname'];
		$Lname=$_POST['lname'];
		$date=$_POST['date'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,600&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/11d397fc54.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>HTML-to-PDF Example</title>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1"
		/>
		<!-- html2pdf CDN link -->
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
			integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		
		<script src=
"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
	</script>
		<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />



		<style>
			/* .text1{
				position:absolute;
		
				top:480px;
				left:300px;
			}
			.text2{
				position:absolute;
				top:640px;
				left:310px;
			} */
			p{
				text-align:center;
				font-size: xx-large;
				width: 76%;
			}
			#invoice{
				background-image:url('images/CERTIFICATE.jpeg');
				background-repeat: no-repeat;
				background-size: 76% 100%;
				height: 1000px;
			}
			
	.qr-code {
	max-width: 150px;
	margin: 200px;
	margin-left:-6%;
	}
	
			</style>
	</head>
	<body><br><br><br>
	<button id="download-button" class="btn btn-success"  style="margin-left:35%">Download as PDF</button>
		<div id="invoice" style="margin-left:5%;">
		
            <!-- <img src= > -->
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p><?php echo $Fname." ".$Lname?></p>
          <!-- <div  class="text1"><h1>Salrima Fernandes</h1></div>
		  <div  class="text2"><h1>10/12/2022</h1></div> -->
		  <br><br><br><br><br>
		  <p style="font-size: x-large;"><?php  echo $date ?></p><br><br><br><br><br><br>
		  <main style="margin-left:32%">
		<div id="qrcode"></div>
	</main>
	<script>
		
		// var qrcode = new QRCode("qrcode",
		// "<?php echo $Fname?>");
		var qrcode = new QRCode("qrcode", {
    text: "<?php echo $Fname." ".$Lname." successfully donated blood through BloodBubble on "."$date"?>",
    width: 100,
    height: 100,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
	</script>
		  <!-- <input type="hidden" size="60"
			maxlength="60" class="form-control"
			id="content"  value="<?php echo $Fname?>"/>
		  <div class="container-fluid">
			<input type="hidden" id="generate">
	<div class="text-center">
	<script src=
	"https://code.jquery.com/jquery-3.5.1.js">
</script> -->

<!-- <script>
	// Function to HTML encode the text
	// This creates a new hidden element,
	// inserts the given text into it
	// and outputs it out as HTML
	function htmlEncode(value) {
	return $('<div/>').text(value)
		.html();
	}

	$(function () {

	// Specify an onclick function
	// for the generate button
	$().click(function () {

		// Generate the link that would be
		// used to generate the QR Code
		// with the given data
		let finalURL =
'https://chart.googleapis.com/chart?cht=qr&chl=' +
		htmlEncode($('#content').val()) +
		'&chs=160x160&chld=L|0'

		// Replace the src of the image with
		// the QR code image
		$('.qr-code').attr('src', finalURL);
	});
	});
</script> -->

	<!-- Get a Placeholder image initially,
	<!-- this will change according to the
	data entered later -->
	<!-- <img src=
"https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
		class="qr-code img-thumbnail img-responsive" />
	</div>

		</div> --> -->
		
		<script>
			const button = document.getElementById('download-button');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('invoice');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);
		</script>
	</body>
</html>