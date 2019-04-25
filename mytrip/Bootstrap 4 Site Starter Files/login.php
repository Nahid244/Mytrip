<?php
   session_start();
   if(isset($_SESSION['id'])){
	   header('location:booking.php');
   }
   

?>
<?php include("includes/header.php")?>
<body >

<?php include("includes/nav.php")?>
<div class="contact-body">
 <div class="container contact-form " >
    <h1>LOGIN FORM</h1>
	<hr>
	<div class="row">
	  <div class="col-md-6">
	     
	  </div>
	  <div class="col-md-6">
	    <form action="login.php" method="post">
	    <div class="form-group">
		   <label >USERNAME</label>
		   <input type="text" class="form-control" name="uname"></input>
		</div>
		<div class="form-group">
		   <label >PASSWORD</label>
		   <input type="text" class="form-control" name="upass"></input>
		</div>
		<div class="form-group">
		   <button class="btn btn-primary btn-block" name="ulogin">login</button>
		</div>
		</form>
	  </div>
	</div>
 </div>
 </div>

<?php include('includes/footer.php')?>
<?php
include('includes/dbcon.php');
if(isset($_POST['ulogin'])){
	
	$username = $_POST['uname'];
	$password = $_POST['upass'] ;
	$qry = "select * from user where username ='$username' and
	password ='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if($row < 1){
		?>
		<script>
		 alert('sdsdsdsdsdsdsds');
		</script>
		<?php
		
	}
	else{
		$data = mysqli_fetch_assoc($run);
		$id = $data['u_id'];
		
		$_SESSION['id']=$id;
		header('location:booking.php');
		
		
	}
	
}
?>