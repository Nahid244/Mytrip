<?php
   session_start();
    if(!isset($_SESSION['id'])){
	   header('location:login.php');
   }
   
?>
<?php include("includes/header.php")?>
<body class="contact-body">

<?php include("includes/nav.php")?>
 <div class="container contact-form " >
    <h1>CONTACT FORM</h1>
	<hr>
	<div class="row">
	  <div class="col-md-6">
	    
	  </div>
	  <div class="col-md-6">
	  <form action="contact.php" method="post">
	    <div class="form-group">
		   <label for="comment">Massege</label>
		   <textarea class="form-control" rows="4" name="umsg"></textarea>
		</div>
		
		<div class="form-group">
		   <button class="btn btn-primary btn-block"  name="usnd">send</button>
		</div>
	  </form>	
	  </div>
	</div>
 </div>
<?php
   include('includes/dbcon.php');
   
   
   if(isset($_POST['usnd'])){
	   $id = $_SESSION['id'];
	   $msg = $_POST['umsg'] ;
	   
	   $qry = "insert into contactmsg (u_id,msg) VALUES('$id','$msg')";
	   
	   $run = mysqli_query($con,$qry);
	   if($run == true){
		   ?>
		   <script>alert('msg sent');</script>
		   <?php
		   
	   }
	   
   }
?>
<?php include("includes/footer.php")?>