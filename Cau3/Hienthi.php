<?php
$servername = 'localhost:3301';
$username = 'root';
$password = 'root';
$dbname = 'quanlysv';

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connect_Failed: " . $conn->connect_error);
}
echo "Thanh cong";

$sql = "SELECT * FROM khoavien";
$res = $conn->query($sql);
if($res->num_rows > 0){
   echo "<table>";
   echo "<th>MaKhoaVien</th><th>TenKhoaVien</th><th>Phone</th><th>Email</th>";
   while($row = $res->fetch_assoc()){
       echo "<tr>";
       echo "<td>".$row['MaKhoaVien']."</td>";
       echo "<td>".$row['TenKhoaVien']."</td>";
       echo "<td>".$row['Phone']."</td>";
       echo "<td>".$row['Email']."</td>";
       echo "<tr>";
   }
   echo "</table>";
}
?>

