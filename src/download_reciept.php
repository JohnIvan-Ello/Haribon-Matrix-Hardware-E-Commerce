<?php
session_start();

require_once("CreateDb.php");

if (isset($_SESSION['cart'])) {
    $db = new CreateDb("Productdb", "localhost", "root", "");

    // Retrieve product information from the database based on the product IDs in the cart
    $product_ids = array_column($_SESSION['cart'], 'product_id');
    $products = $db->getProductsByIds($product_ids);

    // Generate the receipt HTML
    $receipt_html = '<h1>Receipt</h1>';
    $receipt_html .= '<table>';
    $receipt_html .= '<tr><th>Product</th><th>Price</th></tr>';

    foreach ($products as $product) {
        $receipt_html .= '<tr>';
        $receipt_html .= '<td>' . $product['product_name'] . '</td>';
        $receipt_html .= '<td>' . $product['product_price'] . '</td>';
        $receipt_html .= '</tr>';
    }

    $receipt_html .= '</table>';

    // Generate a unique filename for the receipt
    $filename = 'receipt_' . date('YmdHis') . '.html';

    // Save the receipt as an HTML file
    file_put_contents($filename, $receipt_html);

    // Store the receipt information in the database
    $order_id = $_SESSION['order_id'];
    $db->storeReceipt($order_id, $filename);

    // Force the browser to download the receipt file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $filename);
    readfile($filename);

    // Remove the temporary receipt file
    unlink($filename);
} else {
    echo "Cart is empty. Unable to generate receipt.";
}
?>
