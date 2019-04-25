<?php include("includes/header.php")?>
<body >

<div class="container contact-form " >
    <h1>Hotel insert(admin only)</h1>
	<hr>
	<div class="row">
	  <div class="col-md-6">
	     
	  </div>
	  <div class="col-md-6">
	  <form action="ADMIN.php" method="post" enctype="multipart/form-data">
	    <div class="form-group">
		   <label >Hotel Name</label>
		   <input type="text" class="form-control" name="ahname" required></input>
		</div>
		<div class="form-group">
		   <label >status</label>
		   <input type="number" class="form-control" name="ahstatus" required></input>
		</div>
		<div class="form-group">
		   <label >area</label>
		   <input type="text" class="form-control" name="aharea" required></input>
		</div>
		<div class="form-group">
		   <label >image(max:300kib)</label>
		   <input type="file" class="form-control" name="ahimg" ></input>
		</div>
		 <div class="form-group">
		   <label for="comment">Hotel Description</label>
		   <textarea class="form-control" rows="4" name="ahdesc"></textarea>
		</div>
		<div class="form-group">
		   <button class="btn btn-primary btn-block" name="ahinsert">insert</button>
		</div>
		</form>
	  </div>
	</div>
 </div>
 </body>
 </html>
 <?php
 
    include('includes/dbcon.php');
	if(isset($_POST['ahinsert'])){
	   $hname = $_POST['ahname'];
	   $hstatus = $_POST['ahstatus'];
	   $harea = $_POST['aharea'];
	   
	   $hdesc = $_POST['ahdesc'];
	   
	   $imagename =rand(1, 10000) . round(microtime(true)) . '_' . $_FILES['ahimg']['name'];
	   $image = file_get_contents($_FILES['ahimg']['tmp_name']);
	   $image_size = getimagesize($_FILES['ahimg']['tmp_name']);
	   
	    $qry = "INSERT INTO `hotels`( `name`, `status`, `area`, `img`, `descriprtion`) VALUES ('$hname',$hstatus,'$harea','$imagename','$hdesc')";
        $run = mysqli_query($con,$qry);
		move_uploaded_file( $_FILES['ahimg']['tmp_name'],"./data_img/$imagename");
		
		if($run == true){
			?>
		   <script>alert('SUBMITTED');</script>
		   <?php
		}
   
   }
 ?>