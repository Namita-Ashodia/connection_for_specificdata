<?php
  include "../inc/session.php";
  include "../inc/db.php";
  $notificationdate=$_POST['notificationdate'];
  $salesreply=$_POST['salesreply'];
  $replycall=$_POST['replycall'];
  $salesapproval =  $_POST['salesapproval'];
  //$giveto = implode(",",$_POST['giveto']);
  $salesstatus=$_POST['salesstatus'];
  $id =  $_POST['id'];
  
 //print_r($assignedto);
 //echo($approval);
 $query = "UPDATE lead SET `notificationdate`='$notificationdate',`salesapproval`='$salesapproval',`salesstatus`='$salesstatus', `salesreply`='$salesreply',`replycall`='$replycall' WHERE id = '$id'";
//echo($query);

   //if(isset($_POST['submit']))
   //{
   
$res = mysqli_query($dbc, $query) or die(mysqli_query($dbc));
  
  if($res){
      //alert("Lead added successfully");
      //echo "Client Added Successfully!";
      header("location:../adminlead1.php");
  }
  else{
    print "Error in Client Register";
  }
//}
?>
