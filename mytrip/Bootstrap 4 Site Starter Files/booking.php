<?php
   session_start();
    if(!isset($_SESSION['id'])){
	   header('location:login.php');
   }
   
?>
<?php include("includes/header.php")?>
<body>
<?php include("includes/nav.php")?>
<div class="container-fluide">
   <div class="row">
             <div class="col-3 ">
		     <form action="booking.php" method="post">
			     
			    <div class="form-group">
		         <label >search here</label>
		         <input type="text" class="form-control  " name="usearch"></input>
				 
		         </div>
				 <div class="form-group">
				 <button class="btn btn-primary btn-block" name="ugo">GO</button>
		         </div>
			    </div>
			</form>
		 
   </div>
</div>

<div class="container">
     
	   
		 <div class="list-group">
		    <?php
			    include('includes/dbcon.php');
				    
				if(isset($_POST['ugo'])){
					$srch = $_POST['usearch'];
					$sql = "SELECT * FROM hotels where area like '$srch%'";
					$run = mysqli_query($con,$sql);
					$i = 0;
					while($row = mysqli_fetch_array($run,MYSQLI_ASSOC)){
						
			?>
		  <div class="list-group-item  ">	
			  <div class="float-left carousel-inner col-6 ">
			    <?php echo "<img  src='./data_img/".$row['img']."'/>";?>
				
			  </div>
			  <div class="float-right ">
			   <form action="booking.php" method="post">
			    
			  
			      <h5>NAME:<?php echo ($row['name'])?></h5>
			     <p  ><strong>STATUS:</strong><?php echo ($row['status'])?>star</p>
				 <p  ><strong>AREA:</strong><?php echo ($row['area'])?></p>
			 
			     <div class="form-group">
				 
			     <button class="btn btn-primary " name="ubook" value="<?php  echo htmlspecialchars($row['h_id']);?>" >book</button>
				 </div>
			   </form>
			  </div>
		  </div>
			<?php
			   $i++;
				}
				}
			?>
		</div>
		
	 
</div>
<?php
   
	 if(isset($_POST['ubook'])){
		 $j = $_POST['ubook'];
		 
		 $sql = "SELECT * FROM hotels WHERE h_id=$j ";
		 $run = mysqli_query($con,$sql);
		 $row = mysqli_fetch_array($run,MYSQLI_ASSOC)
		 ?>
		  <div class="container  " >
    <h1><?php echo ($row['name'])?></h1>
	<hr>
	<div class="row">
	  <div class="col-12 carousel-inner">
	     <?php echo "<img  src='./data_img/".$row['img']."'/>";?>
		 
		 <p><?php echo ($row['area'])?></p>
		 <p><?php echo ($row['status'])?>STAR </p>
		 <p>DESCRIPTION:<?php echo ($row['descriprtion'])?></p>
	  </div>
	  <div class="col-12">
	   <form action="booking.php" method="post">
	    <div class="form-group">
		   <label >how many rooms?</label>
		   <input type="text" class="form-control" placeholder="eg:7" name="uroomno" required></input>
		</div>
		<div class="form-group">
		   <label >for which date ?</label>
		   <input type="text" class="form-control"placeholder="eg:yy/mm/dd" name="udate" required></input>
		</div>
		 <div class="form-group">
		   <label >how many days?</label>
		   <input type="text" class="form-control" placeholder="eg:3" name="udays" required></input>
		</div>
		<div class="form-group">
		   <label >your phone no plz</label>
		   <input type="text" class="form-control" placeholder="eg:0171****" name="uphn" required></input>
		</div>
		<div class="form-group">
		   <button class="btn btn-primary btn-block" name="usubmit" value="<?php  echo htmlspecialchars($row['h_id']);?>">SUBMIT</button>
		</div>
		</form>
	  </div>
	  <hr class="light">
	</div>
 </div>
		 <?php
	 } 
     

?>
<?php
   include('includes/dbcon.php');
   
   
   if(isset($_POST['usubmit'])){
	   
	   $id = $_SESSION['id'] ;
	   
	   $hid = $_POST['usubmit'];
	     
	   $roomno = $_POST['uroomno'];
	   $date = $_POST['udate'];
	   $days = $_POST['udays'];
	   $phn = $_POST['uphn'];
	   
	   $qry = "insert into bookings (u_id,h_id,roomno,date,days,phn) VALUES($id,$hid,'$roomno','$date','$days','$phn')";
	   
	   $run = mysqli_query($con,$qry);
	   if($run == true){
		   ?>
		   <script>alert('SUBMITTED');</script>
		   <?php
	   }
   }
?>

<?php include('includes/footer.php')?>


