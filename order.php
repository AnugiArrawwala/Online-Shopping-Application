<?php
require_once "config.php";

function generateInvoiceNo($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = "SELECT * FROM products";
    $where_clause_added = false;
    $result_set = array();
    if (!empty($_POST["cart_items"])) {
        $sql = "";
        $user_id = "test_user"; // todo read from user session
        $invoice_id = generateInvoiceNo(10); // generate unique invoice no in readable format;
        $orders = $_POST["cart_items"];
        foreach ($orders as $order_item) {
            $sql .= "INSERT INTO orders (product_id, quantity, unit_price,total,user_id,invoice_id) VALUES ("
                . $order_item['product_id'] . ","
                . $order_item['qty'] . ","
                . $order_item['unitPrice'] . ","
                . $order_item['total'] . ",'"
                . $user_id . "','"
                . $invoice_id . "'"
                . " );";
        }
        if (mysqli_multi_query($link, $sql)) {
            echo json_encode(['invoice_no' => $invoice_id, 'executed' =>  true]);
        } else {
            echo json_encode(['invoice_no' => NULL, 'executed' =>  false]);
        }
    }
    mysqli_close($link);
}
