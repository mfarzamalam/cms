<?php include 'connection.php'; 

	if(!isset($_SESSION['member_code'])){
        header('location:index.php');
    }
    
    if(isset($_POST['search'])){   
		$Day="";
		$Night="";     
		$range = $_POST['range'];
			if(isset($_POST['Day'])){
        		$Day = $_POST['Day'];
			}

			if(isset($_POST['Night'])){
				$Night = $_POST['Night'];
			}
		   
		$date = $_POST['date'];
		
		if(empty($Day) && empty($Night)){
			header('location:bookingForm.php?error=Please Checked atleast one Checkbox');
		}

        if($Day == "Day" && $Night == "Night"){

            // (From_date <= '2013-01-03' AND To_date >= '2013-01-09')
            $q = "SELECT * FROM `grounds` WHERE `rent_day` LIKE 'Yes' 
                                            AND `rent_night` LIKE 'Yes' 
                                            AND `available` LIKE 'Yes'
                                            AND `Day` BETWEEN 1000 AND '$range'
                                            AND `Night` BETWEEN 1000 AND '$range'";
			$r = mysqli_query($conn,$q);
			
 
        } 
        else if ($Day == "Day" && $Night == ""){
            $q = "SELECT * FROM `grounds` WHERE `rent_day` LIKE 'Yes' 
                                            AND `available` LIKE 'Yes'
                                            AND `Day` BETWEEN 1000 AND '$range'";
            $r = mysqli_query($conn,$q);
        
        }
        else if ($Night == "Night" && $Day == ""){
            $q = "SELECT * FROM `grounds` WHERE `rent_night` LIKE 'Yes' 
                                            AND `available` LIKE 'Yes'
                                            AND `Night` BETWEEN 1000 AND '$range'";
			$r = mysqli_query($conn,$q);
        
        }
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Table V04 </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'headerlink.php'; ?>

	<link rel="stylesheet" type="text/css" href="css/bookingSearch.css">

</head>
<body>
    
    <?php include 'header.php'; ?>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Ground name</th>
									<th class="cell100 ">Club it's belong</th>
									<th class="cell100 ">Ground Owner</th>
									<th class="cell100 ">Available</th>
                                    <th class="cell100 ">Sign up now</th>
                                    
								</tr>
							</thead>
						</table>
					</div>

					<?php while($loop = mysqli_fetch_assoc($r)){ 
						
						$q1 = "SELECT * FROM `ground_booking` WHERE `ground_code` = '$loop[ground_code]'  AND `booking_date`='$date'";
						$r1 = mysqli_query($conn,$q1);
						$gr = mysqli_num_rows($r1);
					
						?>

						<div class="table100-body js-pscroll">
							<table>
								<tbody>
									<tr class="row100 body">

										<?php
											if($gr == 0){
										?>
										
										<td class="cell100 column1"><?php echo $loop['ground_name']; ?></td>
										
										<?php 
											$cc = "SELECT * FROM `register_club` WHERE `club_code`='$loop[club_code]' ";
											$cr = mysqli_query($conn,$cc);
											$cr = mysqli_fetch_assoc($cr);
										?>

										<td class="cell100 "><?php echo $cr['club_name']; ?></td>
										<td class="cell100 "><?php echo $loop['ground_owner']; ?></td>
										<td class="cell100 "><?php echo $loop['available']; ?></td>
										<td><a href="bookingRegister.php?id=<?php echo $loop['ground_code']?>&date=<?php echo $date?>"><button class="btn btn--radius-2 btn--red">Register</button></a></td>                          
										
										<?php } else {
											
											$gb = mysqli_fetch_assoc($r1);
											
											$GroundBook = $gb['ground_code'];
											$GroundBookDate = $gb['booking_date'];
						
											$GroundCode = $loop['ground_code'];

											if($GroundBook == $GroundCode && $GroundBookDate == $date){  
											
											}else{
										?>
										
										<td class="cell100 column1"><?php echo $loop['ground_name']; ?></td>
										
										<?php 
											$cc = "SELECT * FROM `register_club` WHERE `club_code`='$loop[club_code]' ";
											$cr = mysqli_query($conn,$cc);
											$cr = mysqli_fetch_assoc($cr);
										?>

										<td class="cell100 "><?php echo $cr['club_name']; ?></td>
										<td class="cell100 "><?php echo $loop['ground_owner']; ?></td>
										<td class="cell100 "><?php echo $loop['available']; ?></td>
										<td><a href="bookingRegister.php?id=<?php echo $loop['ground_code']?>&date=<?php echo $date?>"><button class="btn btn--radius-2 btn--red">Register</button></a></td>                          

									</tr>

								</tbody>
							</table>
						</div>
						
						<?php } ?>
					<?php } ?>
				<?php } ?>
				
				</div>
			</div>
		</div>
	</div>

</body>
</html>