<?php include 'connection.php'; 

    if(!isset($_SESSION['member_code'])){
        header('location:index.php');
    }
    
    $q = "SELECT * FROM training_batch";
    $qr = mysqli_query($conn,$q);
    $querybatch="SELECT * FROM training_batch";
    $resultbatch=mysqli_query($conn,$querybatch);
    
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>BasketBall || Team</title>
      <link rel="icon" href="img/favicon.png">
      
      <?php include 'headerlink.php'; ?>

        <!-- Main CSS-->
        <link href="css/gAdd.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

   </head>
<body>

   <?php include 'header.php'; ?>
   <div class="form-group row">
            <label for="inputState" class="col-sm-2 col-form-label">Batch</label>
        <div class="col-sm-10">
            <select id="daysid"  class="form-control">
                    <option value="" selected>Select Batch</option>
                        
                            <?php while($rowbatch=mysqli_fetch_array($resultbatch)) { ?>
                        <option value=<?php echo $rowbatch['batch_code'];?>><?php echo $rowbatch['batch_name'];?></option>
                            <?php } ?>
                                                
            </select>

        </div>
    </div>
        <!--::breadcrumb part start::-->
            <section class="breadcrumb breadcrumb_bg">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h1>NEW BATCHES ABOUT TO START</h1>
                                <p style="color: red; font-size:30px;">REGISTER NOW</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->
    
        <div id="fo">
            </div>
   
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#daysid").change(function(){
  //  alert("The text has been changed.");
    bi=$('#daysid').val();
   
    if(bi){
    $.ajax({
        type:'POST',
        url:'batchfatch.php',
        data:'batchid='+bi,
        success:function(html){
          //  alert(html);
            $('#fo').html(html);
         //   $('#city').html('<option value="">Select state first</option>'); 
        }
    });
            }

  });
});
</script>
</html>