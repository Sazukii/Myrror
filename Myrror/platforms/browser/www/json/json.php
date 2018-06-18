<?php
include "../database/connect.php";
$data = array();
$q = mysqli_query($conn, "select * from `users`");
while ($row = mysqli_fetch_object($q)) {
    $data[] = $row;
}
echo json_encode($data);
?>