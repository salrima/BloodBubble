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
			</style>
	</head>
	<body><br><br><br>
	<button id="download-button" class="btn btn-success"  style="margin-left:35%">Download as PDF</button>
		<div id="invoice" style="margin-left:5%;">
		
            <!-- <img src= > -->
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p><?php echo $Fname." ".$Lname?></p>
          <!-- <div  class="text1"><h1>Salrima Fernandes</h1></div>
		  <div  class="text2"><h1>10/12/2022</h1></div> -->
		  <br><br><br><br>
		  <p style="font-size: x-large;"><?php echo $date ?></p>
		</div>
		
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