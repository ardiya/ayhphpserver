<?php
  include('connect.php');

  
  $id=$_REQUEST['id'];
  $username=$_REQUEST['username'];
  $password=$_REQUEST['password'];
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $adr=$_REQUEST['adr'];
  $phone=$_REQUEST['phone'];
  $role=$_REQUEST['role'];

 
    $query="update Employee set Username= '$username',Password='$password',EmployeeName='$name',EmployeeEmail='$email',EmployeeAddress='$adr',EmployeePhone='$phone',Role= '$role' where EmployeeID=$id";
      
  
  
    $result2 = mysql_query($query) or die("BP2:".mysql_error());
    
    if($result2){
      $response["success"]=1;
        echo json_encode($response);
    }else{
      
        $response["success"]=0;
        echo json_encode($response);
    }
    

  

  

 
  
  

  
  
  
  
?>