<? php 

  //set connection variables 
  
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'motors_database';
  $db_port = 8889;

  //connection to server & database 
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed miserably: %s\n", mysqli_connect_errno());
    exit();
  endif;
  



$Motor1 = $_POST['Motor1'];
$Motor2 = $_POST['Motor2'];
$Motor3 = $_POST['Motor3'];
$Motor4 = $_POST['Motor4'];
$Motor5 = $_POST['Motor5'];
$Motor6 = $_POST['Motor6'];


if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from control panel ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control panel (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6) VALUES ('$Motor1', '$Motor2', '$Motor3', '$Motor4', '$Motor5', $Motor6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from on_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO on_values (isOn) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from off_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO off_values (isOff) VALUES (0)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


?>
