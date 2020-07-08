<?php include 'connection.php'; 
    $q = "SELECT * FROM `register_member` WHERE `member_code`='$_SESSION[member_code]'";
    $r = mysqli_query($conn,$q);
    $p = mysqli_fetch_assoc($r);

    $q1 = "SELECT * FROM `signin_member` WHERE `member_code`='$_SESSION[member_code]'";
    $r1 = mysqli_query($conn,$q1);
    $p1 = mysqli_fetch_assoc($r1);

?>

<!DOCTYPE html>
<html>
<?php include 'headerlink.php'; ?>

<link rel="stylesheet" href="css/member.css">
<body>
<?php include 'header.php'; ?>

<h3>Your Account</h3>

<div class="member">
  <form action="AccountEdit.php" method="POST">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" value="<?php echo $p['member_name']; ?>">
    <br>

    <label for="JD">Joining Date</label>
    <input type="text" id="JD" value="<?php echo $p['joining_date']; ?>" disabled >
    <input type="hidden" id="JD" name="JD" value="<?php echo $p['joining_date']; ?>" >
    <br>

    <label for="contact1">Your Contact Number</label>
    <input type="text" id="contact1" name="contact1" value="<?php echo $p['member_cont1']; ?>">
    <br>

    <label for="contact2">Another Number (Optional)</label>
    <input type="text" id="contact2" name="contact2" value="<?php echo $p['member_cont2']; ?>">
    <br>

    <label for="CNIC">CNIC</label>
    <input type="text" id="CNIC" name="CNIC" value="<?php echo $p['member_cnic']; ?>">
    <br>  

    <label for="add">Your Address</label>
    <input type="text" id="add" name="add" value="<?php echo $p['member_address']; ?>">
    <br>
    
    <label for="user">Username</label>
    <input type="text" id="user" name="user" value="<?php echo $p1['username']; ?>">
    <br>

    <label for="pass">Password</label>
    <input type="text" id="pass" name="pass" value="<?php echo $p1['password']; ?>">
    <br>
        
    <input type="submit" value="Edit" name="memberEdit">
  </form>
</div>

</body>
</html>
