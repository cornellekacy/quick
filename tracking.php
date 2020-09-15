<?php include 'header.php'; ?>

<div id="tp-page-header" class="tp-page-header">
	<!-- page header -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Track Your Package</h1>
			</div>
		</div>
	</div>
</div>
<!-- /.page header -->
<div id="tp-breadcrumb" class="tp-breadcrumb">
	<!-- breadcrumb -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Track</a></li>
					<li class="active">Package Tracking</li>
				</ol>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<div class="col-md-12"> <br>
				<h3 align="center">ENTER YOUR TRACKING NUMBER IN THE FORM BELLOW TO TRACK YOUR SHIPMENT</h3> <br> <hr>
				<form method="post">
					<div class="form-group">
						<label class="control-label" for="term">Tracking Number</label>
						<input  name="term" type="text" class="form-control" required placeholder="Enter Tracking Number E.g">
					</div>
				</div>
				<div class="col-md-12">
					<button type="submit" name="save" class="btn btn-default">Track Shipment</button>
				</div>
			</form>
		</div>
		<div class="col-md-2">
			
		</div>
		
	</div>
</div>
<br><br>
		<div class="container">

        <?php
        include 'Admin/conn.php';
// Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['save'])){
         $name = $_POST['term'];
         if (empty($name)) {
            echo "<div class='alert alert-danger'>
            <strong>Failed!</strong> Tracking Id Cannot Be Empty.
            </div>";
        }else{

            $sql = "SELECT * FROM track where ship_id LIKE '%$name%'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {?> 
                    <h3 align="center">Tracking information for tracking number <b style="color: red"><?php echo $row["ship_id"] ?></b> </h3><br>
                        <div class="row">
                    <div class="col-md-6">
                        <h3 align="center">RECEIVERS DETAILS</h3><br>
                        <div class="table-responsive">
                            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #bd0000">

                                <tbody>
                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: 	#000000;"><b>RECEIVERS <br> NAME:</b></a> </div>
                                     </td> 
                                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jname"] ?></td>

                                 </tr>
                                 <tr>

                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: 	#000000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
                                     </td>
                                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jadd"] ?></td>

                                 </tr>
                                 <tr>
                                    <td>
                                     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
                                 </td>
                                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jcountry"] ?></td>

                             </tr>
                             <tr>
                                <td>
                                 <div class="contact-container"><a href="#" style="color: 	#000000;"><b>RECEIVERS <br> Number:</b></a> </div>
                             </td>
                             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jnumber"] ?></td>

                         </tr>
                         <tr>
                            <td>
                             <div class="contact-container"><a href="#" style="color: 	#000000;"><b>RECEIVERS <br> Email:</b></a> </div>
                         </td>
                         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jemail"] ?></td>

                     </tr>

                 </tbody>
             </table>
         </div><br>
     </div>

     <div class="col-md-6">
        <h3 align="center">SENDER's DETAILS</h3><br>
        <div class="table-responsive">
            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #bd0000">

                <tbody>
                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SENDER'S <br> NAME:</b></a> </div>
                     </td> 
                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sname"] ?></td>

                 </tr>
                 <tr>

                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
                     </td>
                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sadd"] ?></td>

                 </tr>
                 <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
                 </td>
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["scountry"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SENDER'S <br> Number:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["snumber"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SENDER'S <br> Email:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["semail"] ?></td>

     </tr>

 </tbody>
</table>
</div><br>
</div>

</div>

<div class="row">
<div class="col-md-6">
  <h3 align="center">SHIPMENT DETAILS</h3><br>
  <div class="table-responsive">
    <table class="table table-clean-paddings margin-bottom-0" style="background-color: #bd0000">

        <tbody>
            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: 	#000000;"><b>TRANSPORTATION <br> MODE:</b></a> </div>
             </td> 
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["mode"] ?></td>

         </tr>
         <tr>

            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: 	#000000;"><b>PRODUCT <br> NAME:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["prod"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: 	#000000;"><b>TRACKING<br> NUMBER:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ship_id"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: 	#000000;"><b>DELIVERY <br> STATUS:</b></a> </div>
     </td>
     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["deliverys"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["descrip"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>
<div class="col-md-6">
    <h3 align="center">PACKAGE DETAILS</h3><br>
    <div class="table-responsive">
        <table class="table table-clean-paddings margin-bottom-0" style="background-color: #bd0000">

            <tbody>
                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>PACKAGE CURRENT  <br> LOCATION:</b></a> </div>
                 </td> 
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["currentl"] ?></td>

             </tr>
             <tr>

                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
                 </td>
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["pickupl"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: 	#000000;"><b>DEPARTURE<br> DATE:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_date"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: 	#000000;"><b>DELIVERY <br> DATE:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ddate"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: 	#000000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
     </td>
     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["items"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["weight"] ?></td>

</tr>

<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["cat"] ?></td>

</tr>
<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: 	#000000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["status"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>
</div>
<h1 align="center"><a href="map.php?id=<?php echo $row["track_id"]; ?>">View Map Here</a></h1>






<?php       
}
} else {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
    </div>";
}
}
}

?>

</div> 
</div> 

</div>






<?php include 'footer.php'; ?>