<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = array(
        'status' => 'success',
        'message' => 'Мэдээлэл амжилттай хадгалагдлаа',
        'received_data' => $_POST
    );
    
    echo json_encode($response);
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Зөвхөн POST хүсэлт зөвшөөрөгдсөн'
    );
    
    echo json_encode($response);
}
?>
