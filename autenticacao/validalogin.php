<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysqli_connect("localhost","root","","pi_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    echo "connect sucessfuly";
  }

$result="SELECT * FROM Usuario where usuario=$login and senha=$senha";

//echo $result;
mysqli_query($con,$result);
//$result1 =$con->query($result);

echo mysqli_affected_rows($con);
echo mysqli_error($con);
echo mysqli_get_server_info($con);

//echo $result1->num_rows;
//if ($result1->num_rows>0) {
//    echo "Sucesso garoto";
//}

?>
