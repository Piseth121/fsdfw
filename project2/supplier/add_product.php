<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

echo json_encode(['data' => $products]);

$conn->close();
?>
<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $supplier = $_POST['supplier'];
    $unit_price = $_POST['unit_price'];
    $unit = $_POST['unit'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (product_name, supplier, unit_price, unit, stock, description)
            VALUES ('$product_name', '$supplier', '$unit_price', '$unit', '$stock', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => "Product added successfully!"]);
    } else {
        echo json_encode(["error" => "Error: " . $conn->error]);
    }
}

$conn->close();
?>
