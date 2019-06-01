<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data From Database Using CodeIgniter</title>
		<!--=========== Importing Google fonts ===========-->
		<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<style type>
		#container{
		width:960px;
		height:610px;
		margin:50px auto;
		}
		#wrapper{
		width:460px;
		padding:0 50px 20px;
		background:linear-gradient(#fff,#FFABDB);
		border:1px solid #ccc;
		box-shadow:0 0 5px;
		font-family:'Marcellus',serif;
		float:left;
		margin-top:10px;
		}
		#menu{
		float:left;
		width:200px;
		margin-top:-30px;
		}
		#detail{
		float:left;
		width:220px;
		padding:10px;
		margin-top:-40px;
		}
		a{
		text-decoration:none;
		color:blue;
		}
		a:hover{
		color:red;
		}
		h1{
		text-align:center;
		font-size:28px
		}
		hr{
		border:0;
		border-bottom:1.5px solid #ccc;
		margin-top:-10px;
		margin-bottom:30px;
		}
		button{
		padding:6px 30px;
		margin-top:10px;
		font-size:14px;
		background:linear-gradient(#fff,#828FEC);
		border:2px solid #828FEC;
		font-weight:700;
		color:#8b008b;
		}
		button:hover{
		background:linear-gradient(#828FEC,#fff)
		}
		p{
		font-size:18px;
		font-weight:700;
		color:#18af0b
		}	

			
		</style>


		



	</head>
	<body>
		<div id="container">
			<div id="wrapper">
				<h1>Delete Data From Database Using CodeIgniter</h1>
				<div id="menu">
				<p>Click On Names</p>
				<!--====== Displaying Fetched Names from Database in Links ========-->
				<ol>
				<?php foreach ($students as $student): ?>
				<li><a href="<?php echo base_url() . "index.php/welcome/index/" . $student->student_id; ?>"><?php echo $student->student_name; ?></a>
				</li><?php endforeach; ?>
				</ol>

					<br>
					<h2>Ajax post data</h2>
				<a href="<?php echo base_url() . "index.php/welcome/ajax/" ; ?>">
				<button>Ajax form</button></a>


				<a href="<?php echo base_url() . "index.php/welcome/ajaxformfirst/" ; ?>">
				<button>Ajax Db form</button></a>


				</div>


				<div id="detail">
				<!--====== Displaying Fetched Details from Database ========-->
				<?php foreach ($single_student as $student): ?>
				<p>Student Detail</p>
				<?php echo $student->student_name; ?><br>
				<?php echo $student->student_email; ?><br>
				<?php echo $student->student_contact; ?><br>
				<?php echo $student->student_address; ?><br>
				<!--====== Delete Button ========-->
				<a href="<?php echo base_url() . "welcome/delete_student_id/" . $student->student_id; ?>">
				<button>Delete</button></a>



				<a href="<?php echo base_url() . "welcome/update_student_id1/" . $student->student_id; ?>">
				<button>Update</button></a>
				<?php endforeach; ?>





			</div>



		</div>
		</div>






	</body>
</html>



