<?php

    include('connect.php');
    header("Connect-type: text/html; charset = utf8-8");
    // $slcdb = mysqli_select_db($db_link, "fjuweb");

    $sql_query = "SELECT year, event FROM `history` ORDER BY year ASC";
    $result = $mysqli->query($sql_query);

    if (!$result) {
        die("查詢失敗：" . $mysqli->error);
    }

    $data = array();

    // 在這裡處理查詢結果
    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }

    // 關閉查詢結果
    $result->close();

    echo json_encode($data);

?>