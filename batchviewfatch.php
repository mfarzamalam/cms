<?php include 'connection.php'; 

$c= $_POST["batchid"];
      
        $q = "SELECT * FROM `training_batch` WHERE `club_code`='$_SESSION[club_code]' AND `batch_code`='$c' ORDER BY `batch_code` DESC";
        $r = mysqli_query($conn,$q);
        $res =mysqli_fetch_row($r);

        $date = Date("Y-m-d");
        $exp_date = $res[5];
?>

<?php if($date <= $exp_date) {?>
    <form method="POST" action="batchEdit&Delete.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title"><?php echo $res[1]?></h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                            <div class="form-row">
                                    <div class="name">Batch Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="batchname" value="<?php echo $res[1]?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Batch Description</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="batchdes" value="<?php echo $res[2]?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="hidden" name="batchcode" value="<?php echo $c?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="name">Registration Start Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="sdate" value="<?php echo $res[4]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Registration End Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="edate" value="<?php echo $res[5]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Member limit</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="mlimit" value="<?php echo $res[6]?>">
                                        </div>
                                    </div>
                                </div>                            
                                
                                <div class="form-row">
                                    <div class="name">Eligiblity Criteria</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="ecr" value="<?php echo $res[7]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Fees (Rs)</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="fees" value="<?php echo $res[8]?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="name">Coach Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="cname1" value="<?php echo $res[9]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Second Coach Name (Optional) </div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="cname2" value="<?php echo $res[10]?>">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <?php if(isset($_GET['error'])) { ?>
                                        <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                                    <?php } ?>
                                    <button class="btn btn--radius-2 btn--red" name="Edit" type="submit">Edit</button>
                                    <button class="btn btn--radius-2 btn--red" name="Delete" type="submit" onclick='return checkdel()'>Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
    </form>
                                    <?php } else {?>
    
                                        <form method="POST" action="batchEdit&Delete.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">EXPIRED</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                            <div class="form-row">
                                    <div class="name">Batch Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="batchname" value="<?php echo $res[1]?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Batch Description</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="batchdes" value="<?php echo $res[2]?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="hidden" name="batchcode" value="<?php echo $c?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="name">Registration Start Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="sdate" value="<?php echo $res[4]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Registration End Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="edate" value="<?php echo $res[5]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Member limit</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="mlimit" value="<?php echo $res[6]?>">
                                        </div>
                                    </div>
                                </div>                            
                                
                                <div class="form-row">
                                    <div class="name">Eligiblity Criteria</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="ecr" value="<?php echo $res[7]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Fees (Rs)</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="fees" value="<?php echo $res[8]?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="name">Coach Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="cname1" value="<?php echo $res[9]?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Second Coach Name (Optional) </div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="cname2" value="<?php echo $res[10]?>">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
    </form>

                                    <?php } ?>

                               
                                