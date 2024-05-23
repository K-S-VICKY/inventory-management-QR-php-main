<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $productName = $_POST['name'];
    $quantity = $_POST['quantity'];

    // Generate QR Code URL
    $qrCodeData = "Product: " . $productName . ", Quantity: " . $quantity;
    $qrCodeUrl = generateQRCode($qrCodeData);

    // Save product to database or perform other operations as needed

    // Redirect back to index.php
    header("Location: index.php");
    exit();
}

function generateQRCode($data) {
    $qrCodeUrl = 'https://quickchart.io/qr?text=' . urlencode($data);
    return $qrCodeUrl;
}

?>
