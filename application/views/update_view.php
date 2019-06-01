<!DOCTYPE html>
<html>
	<head>

		<style>
		#container {
		width:622px;
		height:610px;
		margin:50px auto
		}
		#wrapper {
		width:520px;
		padding:0 50px 20px;
		background:linear-gradient(#fff,#AFEBD8);
		border:1px solid #ccc;
		box-shadow:0 0 5px;
		font-family:'Marcellus',serif;
		float:left;
		margin-top:10px
		}
		#menu {
		float:left;
		width:200px;
		margin-top:-30px
		}
		#detail {
		float:left;
		width:320px;
		margin-top:-27px
		}
		a {
		text-decoration:none;
		color:blue
		}
		a:hover {
		color:red
		}
		li {
		padding:4px 0
		}
		h1 {
		text-align:center;
		font-size:28px
		}
		hr {
		border:0;
		border-bottom:1.5px solid #ccc;
		margin-top:-10px;
		margin-bottom:30px
		}
		#hide {
		display:none
		}
		form {
		margin-top:-40px
		}
		label {
		font-size:17px
		}
		input {
		width:100%;
		padding:8px;
		margin:5px 0 15px;
		border:none;
		box-shadow:0 0 5px
		}
		input#submit {
		margin-top:10px;
		font-size:18px;
		background:linear-gradient(#22abe9 5%,#36caf0 100%);
		border:1px solid #0F799E;
		color:#fff;
		font-weight:700;
		cursor:pointer;
		text-shadow:0 1px 0 #13506D
		}
		input#submit:hover {
		background:linear-gradient(#36caf0 5%,#22abe9 100%)
		}
		p {
		font-size:18px;
		font-weight:700;
		color:#18af0b
		}


		</style>

		<title>Update Data In Database Using CodeIgniter</title>
		<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/update.css" ?>">
	</head>
	<body>
		<div id="container">
			<div id="wrapper">
				<h1>Update Data In Database Using CodeIgniter </h1><hr/>
				<div id="menu">
					<p>Click On Names</p>
					<!-- Fetching Names Of All Students From Database -->
					<ol>
					<?php foreach ($students as $student): ?>
					<li><a href="<?php echo base_url() . "/welcome/show_student_id/" . $student->student_id; ?>">

						<?php echo $student->student_name; ?></a></li>
					<?php endforeach; ?>
					</ol>
				</div>
				<div id="detail">
					<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
					<?php foreach ($single_student as $student): ?>
					<p>Edit Detail & Click Update Button</p><br>
					<form method="post" action="<?php echo base_url() . "/welcome/update_student_id1"?>">
					<label id="hide">Id :</label>
					<input type="text" id="hide" name="did" value="<?php echo $student->student_id; ?>">
					<label>Name :</label>
					<input type="text" name="dname" value="<?php echo $student->student_name; ?>">
					<label>Email :</label>
					<input type="text" name="demail" value="<?php echo $student->student_email; ?>">
					<label>Mobile :</label>
					<input type="text" name="dmobile" value="<?php echo $student->student_contact; ?>">
					<label>Address :</label>
					<input type="text" name="daddress" value="<?php echo $student->student_address; ?>">
					<input type="submit" id="submit" name="dsubmit" value="Update">
					</form>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</body>
</html>