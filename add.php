<html> 

<head>
<meta charset="UTF-8">
<title> </title> 

</head> 
<body>
<?php

$Motor1 = $_POST("Motor1");
$Motor2 = $_POST("Motor2");
$Motor3 = $_POST("Motor3");
$Motor4 = $_POST("Motor4");
$Motor5 = $_POST("Motor5");
$Motor6 = $_POST("Motor6");

$conn = new mysqli("localhost", "root", "control panel");
$stmt = $conn->prepare(" insert into control panel(Motor1, Motor2, Motor3, Motor4, Motor5, Motor6) values (?,?,?,?,?,?);");
$stmt->bind_param("iii", $Motor1, $Motor2, $Motor3, $Motor4,$Motor5, $Motor6 );
$stmt->execute();
echo "Done";



$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'motors_database';
$db_port = 8889;

// 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//  
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM motors_values ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


$sql2 = mysqli_query($connection, "SELECT * FROM on_values ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM off_values ORDER BY id DESC LIMIT 1");

$print_data3 = mysqli_fetch_row($sql3);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";

echo "SAVED BUTTON";
echo"<hr>";

echo "id = ".$print_data[0];
echo "<br>";
echo "Motor1 =  ".$print_data[1];
echo "<br>";
echo "Motor2 =  ".$print_data[2];
echo "<br>";
echo "Motor3 =  ".$print_data[3];
echo "<br>";
echo "Motor4 =  ".$print_data[4];
echo "<br>";
echo "Motor5 =  ".$print_data[5];
echo "<br>";
echo "Motor6 =  ".$print_data[6];
echo"<br>";
echo"<br>";




echo"ON BUTTON";
echo "<hr>";
echo "id =  ".$print_data2[0];
echo"<br>";
echo "isOn =  ".$print_data2[1];
echo "<br>";
echo "<br>";


echo"OFF BUTTON";
echo"<hr>";
echo "id =  ".$print_data3[0];
echo"<br>";
echo "isOff =  ".$print_data3[1];
echo "<br>";
echo "<br>";

?>


</body>
</html>