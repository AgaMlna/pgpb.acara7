<?php
// Fungsi untuk menghitung total harga
function calculateTotal($pricePerItem, $quantity) {
    $total = $pricePerItem * $quantity;
    return $total;
}

// Fungsi untuk menghitung diskon
function applyDiscount($totalPrice) {
    $discount = 0;
    
    if ($totalPrice > 100) {
        $discount = $totalPrice * 0.1;
    }

    return $totalPrice - $discount;
}

// Implementasi penggunaan fungsi
$pricePerItem = 25; 
$quantity = 5; 

$totalPrice = calculateTotal($pricePerItem, $quantity);
$totalWithDiscount = applyDiscount($totalPrice);

echo "Total sebelum diskon: Rp$totalPrice<br>";
echo "Total setelah diskon: Rp$totalWithDiscount";
?>
