<?php
include 'conn.php';

$data=array();
$json=array();
$sql="SELECT * FROM message";
$result=$conn->query($sql);
if($result->num_rows >0){
    while($row =$result->fetch_assoc()){

        $data["sender_name"]=$row["sender_name"];
        $data["sender_message"]=$row["sender_message"];
        array_push($json, $data);
    }

    echo json_encode($json);
}
else{
    echo "0 results";
}
mysqli_close($conn);
?>