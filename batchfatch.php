<?php  

include 'connection.php';

$c= $_POST["batchid"];
$q = "SELECT * FROM training_batch where batch_code='$c'";
$qr = mysqli_query($conn,$q);
  

?>
 <?php while($c = mysqli_fetch_assoc($qr)) {
            $total = ""; 
            $s = "SELECT * FROM `training_register` WHERE `batch_code`=$c[batch_code]";
            $r = mysqli_query($conn,$s);
            $reg = mysqli_num_rows($r);

            $displayQuery="SELECT * FROM `training_register` WHERE `member_code`='$_SESSION[member_code]' AND `batch_code`='$c[batch_code]'";
            $displayResult=mysqli_query($conn,$displayQuery);

            $total = $c['member_limit'] - $reg;

               if(mysqli_num_rows($displayResult)<=0){

        ?>

        <form method="POST" action="trainingSub.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title"><?php echo $c['batch_name']?></h2>
                    </div>
                    
                    <div class="card-body">                        
                        <input type="hidden" name="batchcode" value="<?php echo $c['batch_code']?>">
                        <input type="hidden" name="membercode" value="<?php echo $_SESSION['member_code']?>">
                        <input type="hidden" name="fees" value="<?php echo $c['fees']?>">
                        <input type="hidden" name="Aseats" value="<?php echo $c['member_limit']?>">
                        <input type="hidden" name="Rseats" value="1">
                    

                        <div class="form-row">
                                <div class="name">Fees (per person)</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" value="<?php echo $c['fees']; ?>" disabled>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Available Seats</div>
                                <div class="value">
                                    <div class="input-group">

                                        <?php if($total == "") { ?>
                                            <input class="input--style-5" type="number" value="<?php echo $c['member_limit'];?>" disabled>
                                        <?php  } else { ?>
                                            <input class="input--style-5" type="number" value="<?php echo $total ?>" disabled>
                                        <?php  } ?>
                                        
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Your Seat</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" value="1" disabled>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                        <div class="name">Payment mode</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="payment" required>
                                        <option disabled="disabled" value="" selected>Choose option</option>
                                        <option value="Easy Paisa">Easy Paisa</option>
                                        <option value="Jaaz Cash">Jaaz Cash</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                                <?php if(isset($_GET['error'])) { ?>
                                    <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                                <?php } ?>
                                <button class="btn btn--radius-2 btn--red" name="register" type="submit">Register</button>
                    </div>
                </div>
            </div>
        </form>
                        <?php } 
                        else{
                            ?>
                            <h1> You Have Already Registered To This Batch</h1>
                            <?php
                        }
                        ?>
                            <?php } ?>