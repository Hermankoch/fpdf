
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

<?php
echo '<form id="rsaid" action="" method="post"><input style="margin-right: 10px" type="text" name="getRsaId" placeholder"Enter RSA ID here"><input type="submit" name="submit" value="submit"></form>';
function checkId ($rsaid){
  $db = "";
  $con = "";
  $userName = "";
  $pass = "";
  $dbcon = mysqli_connect($conn,$userName,$pass,$db);
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  $sqlquery = "SELECT * FROM `wp8h_rsa_id` WHERE `rsa_id` = {$rsaid}";
  $result = mysqli_query($dbcon, $sqlquery);

  $accountStatus = array();
  while (($row = mysqli_fetch_assoc($result)) !== null){
    $accountStatus[] = array(
      'id' => $row['rsa_id'],
      'accountStatus' => $row['account_status'],
    );
  }
  return $accountStatus;
}//checkId

if(isset($_POST['getRsaId'])){
//check if 13 digit //
$rsaid = $_POST['getRsaId'];
$regex = '/^[0-9]{13}$/';
$match = preg_match($regex, $rsaid);
  if($match){
    $idStatusArr = checkId($rsaid);
    if(!empty($idStatusArr)){
      $intTest = trim($idStatusArr[0]['accountStatus']);
      if($intTest == 2){
        echo '<div style="color: red;">Unfortunately you do not meet our requirements.</div>';
      }else {
        echo '<div style="color: green;">Please fill in the application form.</div>';
        echo do_shortcode('[profilepress-registration id="2"]');
      }
    }else {
    $db = "";
    $con = "";
    $userName = "";
    $pass = "";
    $dbcon = mysqli_connect($conn,$userName,$pass,$db);
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
    $sqlquery = "INSERT INTO `wp8h_rsa_id` (`rsa_id`,`account_status`) VALUES ({$rsaid},'1')";
    $result = mysqli_query($dbcon, $sqlquery);
    echo '<div style="color: green;">Please fill in the application form.</div>';
    echo do_shortcode('[profilepress-registration id="2"]'); //change short code here
    }
  }else {
  echo '<div style="color: red;">Not a valid 13 digit RSA ID Number</div>';
  }
}//post isset
 ?>

<?php
echo '<h1>Account Status</h1>';
echo '<form id="rsaid" action="" method="post"><input style="margin-right: 10px" type="text" name="getRsaId" placeholder"Enter RSA ID here"><label for="Block" style="margin-right: 10px"><input id="Block" type="radio" name="accountStatus[]" value="2">Block</label><label  for="Unblock" style="margin-right: 10px"><input id="Unblock" type="radio" name="accountStatus[]" value="1">Unblock</label><input type="submit" name="submit" value="submit"></form>';

if(isset($_POST['getRsaId'])){
//check if 13 digit //
$rsaid = $_POST['getRsaId'];
$status = $_POST['accountStatus'][0];
$regex = '/^[0-9]{13}$/';
$match = preg_match($regex, $rsaid);
  if($match){
    $result = updateAccountStatus($rsaid, $status);
    echo $result;
  }else {
    echo '<div style="color: red;">Not a valid 13 digit RSA ID Number</div>';
  }
}

function updateAccountStatus ($rsaid, $status){
  $db = "";
  $con = "";
  $userName = "";
  $pass = "";
  $dbcon = mysqli_connect($con,$userName,$pass,$db);
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  $sqlquery = "UPDATE `wp8h_rsa_id` SET `account_status` = {$status} WHERE `rsa_id` = {$rsaid}";
  $result = mysqli_query($dbcon, $sqlquery);
  if($result){
    return '<div style="color: green;">Account Status Updated.</div>';
  }else {
    return '<div style="color: red;">ID not found / updated.</div>';
  };
}

/*if($rowcount == 0) {/*
return false;
}else {/*
return '<div style="color: red;">ID number not found</div>';
} */
 ?>
