<html>
<head>
<title>Submit CodeIgniter Form Using jQuery</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>




<script>
	
			$(document).ready(function(){
			$("#submit").click(function(){
			$("#form").submit();  // jQuey's submit function applied on form.
			});
			});

</script>


<style>
	
	#container{
width:960px;
height:610px;
margin: 50px auto;
}
.error{
color: red;
font-size: 13px;
margin-bottom: -6px;
}
form{
width: 345px;
padding: 0px 50px 20px;
background-color: whitesmoke;
border: 1px solid #ccc;
box-shadow: 0 0 5px;
font-family: 'Marcellus', serif;
float:left;
margin-top: 15px;
}
h1{
text-align: center;
font-size: 28px;
}
hr{
border: 0;
border-bottom: 1.5px solid #ccc;
margin-top: -10px;
margin-bottom: 30px;
}
label{
font-size: 17px;
}
input{
width: 100%;
padding: 10px;
margin: 6px 0 20px;
border: none;
box-shadow: 0 0 5px;
}
#submit{
padding: 10px;
text-align: center;
box-shadow: 0 0 5px;
font-size: 18px;
background: linear-gradient(#22abe9 5%, #36caf0 100%);
border: 1px solid #0F799E;
color: #ffffff;
font-weight: bold;
cursor: pointer;
text-shadow: 0px 1px 0px #13506D;
}
#submit:hover{
background: linear-gradient(#36caf0 5%, #22abe9 100%);
}


</style>
</head>
<body>






<div id="container">
<?php echo form_open('/welcome/ajaxform',array('id'=>'form')); ?>
<h1>Submit CodeIgniter Form Using jQuery</h1>
<?php echo form_label('Name :'); ?> <?php echo form_error('dname'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?>
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?>
<?php echo form_label('Mobile No. :'); ?> <?php echo form_error('dmobile'); ?>
<?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile')); ?>
<?php echo form_label('Address :'); ?> <?php echo form_error('daddress'); ?>
<?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?>
<?php echo ('<p id="submit">Submit</p>'); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>


