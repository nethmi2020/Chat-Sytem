<?php

include 'conn.php';
$name=$_POST['name'];
$msg=$_POST['msg'];

if($name !="" && $msg != ""){
    $sql=$conn->query("
    INSERT INTO message (sender_name,sender_message) VALUES ('$name','$msg');
    ");

    echo json_encode(array("statusCode"=>200));
}
else{
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>