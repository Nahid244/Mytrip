<?php
   session_start();
    if(isset($_SESSION['id'])){
	   header('location:index.php');
   }
   
?>
<?php include("includes/header.php")?>
<body class="contact-body">

<?php include("includes/nav.php")?>
 <div class="container contact-form " >
    <h1>REGISTRATION FORM</h1>
	<hr>
	<div class="row">
	  <div class="col-md-6">
	     
	  </div>
	  <div class="col-md-6">
	  <form action="reg.php" method="post">
	    <div class="form-group">
		   <label >username</label>
		   <input type="text" class="form-control" name="iname" required></input>
		</div>
		<div class="form-group">
		   <label >password</label>
		   <input type="text" class="form-control" name="ipass" required></input>
		</div>
		<div class="form-group">
		   <button class="btn btn-primary btn-block" name="ireg">Register</button>
		</div>
		</form>
	  </div>
	</div>
 </div>
<?php
   include('includes/dbcon.php');
   
   
   if(isset($_POST['ireg'])){
	   $name = $_POST['iname'] ;
	   $pass = $_POST['ipass'];
	   $qry = "insert into user (username,password) VALUES('$name','$pass')";
	   
	   $run = mysqli_query($con,$qry);
	   if($run == true){
		   ?>
		   <script>alert('registered succesfully');</script>
		   <?php
		    header('location:login.php');
		   
	   }
	   else{
		   ?>
		   <script>alert('username allready exits');</script>
		   <?php
	   }
   }
?>
<?php include("includes/footer.php")?>