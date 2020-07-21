<?php include 'connection.php'; 
        
        if(!isset($_SESSION['club_code'])){
            header('location:ClubLoginForm.php');
        }
        $querybatch="SELECT * FROM `training_batch` WHERE `club_code`='$_SESSION[club_code]' ORDER BY `batch_code` DESC";
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

        <style> 
            .card-5 .card-heading {
                background-color: green;
            }
        
        </style>

   </head>
<body>

   <?php include 'header.php'; ?>

        <!--::breadcrumb part start::-->
            <section class="breadcrumb breadcrumb_bg">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h1>All Batches</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->
        <div class="form-group row">
            <label for="inputState" class="col-sm-2 col-form-label">Batch</label>
      <div class="col-sm-10">
      <select id="daysid"  class="form-control">
             <option value="" selected>Select Batch</option>

                <?php   while($rowbatch=mysqli_fetch_array($resultbatch)){?>
                    <option value=<?php echo $rowbatch['batch_code'];?>><?php echo $rowbatch['batch_name'];?></option>
                <?php } ?>
                                        
      </select>
      </div>
    </div>
   

        <div id="fo">
        </div>

  <script>
        function checkdel(){
            return confirm('Are you sure you want to delete ?');
        }
    
    </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#daysid").change(function(){
   
    bi=$('#daysid').val();
   // alert(bi);
   
    if(bi){
    $.ajax({
        type:'POST',
        url:'batchviewfatch.php',
        data:'batchid='+bi,
        success:function(html){
           // alert(html);
            $('#fo').html(html);
         //   $('#city').html('<option value="">Select state first</option>'); 
        }
    });
            }

  });
});
</script>
</html>