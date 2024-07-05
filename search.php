<?php
require_once "config.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = "SELECT * FROM products";
    $where_clause_added = false;
    $result_set = array();
    if (!empty($_POST["filter"])) {
        $searchQuery = $_POST['filter'];
        $query = $query . " WHERE name LIKE '%$searchQuery%'";
        $where_clause_added = true;
    }
    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $result_set[] = $row;
            }
        }
        echo json_encode($result_set);
    } else {
        echo json_encode($result_set);
    }
    mysqli_close($link);
}
