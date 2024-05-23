<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $productName = $_POST['name'];
    $quantity = $_POST['quantity'];

    // Generate QR Code URL
    $qrCodeData = "Product: " . $productName . ", Quantity: " . $quantity;
    $qrCodeUrl = generateQRCode($qrCodeData);

    // Save product to database or perform other operations as needed

    // Display the QR code
    echo '<div class="product">';
    echo '<h3>' . $productName . '</h3>';
    echo '<p>Quantity: ' . $quantity . '</p>';
    echo '<img src="' . $qrCodeUrl . '" alt="QR Code">';
    echo '</div>';
}

function generateQRCode($data) {
    $qrCodeUrl = 'https://quickchart.io/qr?text=' . urlencode($data);
    return $qrCodeUrl;
}
?>