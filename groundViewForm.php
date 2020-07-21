<?php include 'connection.php'; 

       if(!isset($_SESSION['club_code'])){
        header('location:ClubLoginForm.php');
        }
           
        $queryground="SELECT * FROM `grounds` WHERE `club_code`='$_SESSION[club_code]' AND `status`='ON' ORDER BY `ground_code` DESC";
        $resultground=mysqli_query($conn,$queryground);

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
                background-color: red;
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
                                <h1>View Ground</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <div class="form-group row">
            <label for="inputState" class="col-sm-2 col-form-label">Select Ground</label>
      <div class="col-sm-10">
      <select id="daysid"  class="form-control">
            <option value="" selected>Select Ground</option>

            <?php while($rowground=mysqli_fetch_array($resultground)) { ?>
                <option value=<?php echo $rowground['ground_code'];?>><?php echo $rowground['ground_name'];?></option>
            <?php } ?>
                                        
      </select>

      </div>
    </div>
        <!--::breadcrumb part end::-->
  

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
  //  alert("The text has been changed.");
    bi=$('#daysid').val();
   
    if(bi){
    $.ajax({
        type:'POST',
        url:'fetchground.php',
        data:'groundid='+bi,
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