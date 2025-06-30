<?php
session_start();

if (!isset($_SESSION['id'])) {
    http_response_code(403);
    echo json_encode(['status' => 'error', 'message' => 'Not authenticated']);
    exit();
}

$host = "localhost";
$dbname = "nova_capital";
$username = "root";
$password = "Abhi";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
-
    $data = json_decode(file_get_contents("php://input"), true);

    $user_id = $_SESSION['id'];
    $stock_symbol = "AMZN";
    $stock_name = "Amazon.com Inc.";
    $transaction_type = $data['type'];
    $quantity = (float) $data['quantity'];
    $price_per_share = (float) $data['price'];
    $total_amount = round($quantity * $price_per_share, 2);
    $transaction_fees = 0.00;
    $status = 'completed';
    $notes = "Simulated live chart transaction";

    $stmt = $conn->prepare("INSERT INTO transactions 
        (user_id, stock_symbol, stock_name, transaction_type, quantity, price_per_share, total_amount, transaction_fees, transaction_date, status, notes) 
        VALUES 
        (:user_id, :stock_symbol, :stock_name, :transaction_type, :quantity, :price_per_share, :total_amount, :transaction_fees, NOW(), :status, :notes)");

    $stmt->execute([
        ':user_id' => $user_id,
        ':stock_symbol' => $stock_symbol,
        ':stock_name' => $stock_name,
        ':transaction_type' => $transaction_type,
        ':quantity' => $quantity,
        ':price_per_share' => $price_per_share,
        ':total_amount' => $total_amount,
        ':transaction_fees' => $transaction_fees,
        ':status' => $status,
        ':notes' => $notes
    ]);

    echo json_encode(['status' => 'success', 'message' => 'Transaction recorded']);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
