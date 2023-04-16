<?php
$host = "localhost";
$user="root";
$pass="";
$debe="healthyricefields";

$db=new mysqli($host,$user,$pass,$debe)
or die($db->error);
// $conn = new mysqlsi("localhost","root","","healthyricefields");

// $result = mysqli_query($conn, SELECT * FROM tb_parameter);
//  var_dump($result);
?>  

<?php 
    include 'konek.php'
    $sql = mysqli_query($conn, SELECT * ORDER BY tb_parameter)
    or die (mysql_error);
    $no=0;
    while($data=mysql_fetch_array($sql)){
        $no++;
        $id=$data[id]
    }


?>

