<?php
require_once "connect.php";

$imageIdsArray = $_POST['imageIds'];

$count = 1;
foreach ($imageIdsArray as $id) {

    $sql = $conn->prepare("UPDATE GuestsOfHonour SET PlaceOrder=? WHERE ID=?");
    $imageOrder = $count;
    $imageId = $id;

    $sql->bind_param("ii", $imageOrder, $imageId);
    if ($sql->execute()) {
        $response = 'Images order is updated';
    } else {
        $response = 'Problem in Changing the Image Order';
    }
    $count ++;
}

echo $response;
exit;
?>