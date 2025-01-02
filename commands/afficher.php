





<?php


    require_once '../database.php';
    $conn = new database();
    $db = $conn->getConnect();


    $Limit = 3;
    $offset;
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $offset = ($_GET['page'] - 1) * $Limit;
    }else{
        $offset = 1;
    }

    $sql = $db->prepare("SELECT * FROM vehicule LIMIT $Limit OFFSET $offset");
    $getPage = $db->prepare("SELECT * FROM vehicule");
    $data = array();
    if($sql->execute() && $sql->rowCount() > 0){
        foreach($sql as $car){
            $data[] = $car;
        }
        echo json_encode($data);
    }else{
        echo json_encode([]);
    }




?>