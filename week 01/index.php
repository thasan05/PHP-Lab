<?php

// Student Information
$studentName = "Tanvir Hasan";
$studentID = "23-54796-3";

// Food Selection
$choice = 1;      // 1=Burger, 2=Pizza, 3=Sandwich, 4=Coffee
$quantity = 6;

// Determine Food Item and Price using switch-case
switch ($choice) {
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;

    default:
        $foodItem = "Invalid";
        $price = 0;
}

// Calculate Total
$subtotal = $price * $quantity;

// Discount using if-else
if ($subtotal >= 30) {
    $discountPercent = 20;
} elseif ($subtotal >= 20) {
    $discountPercent = 10;
} else {
    $discountPercent = 0;
}

$discountAmount = ($subtotal * $discountPercent) / 100;
$finalBill = $subtotal - $discountAmount;

// Display Bill
echo "================================<br>";
echo "UNIVERSITY CAFETERIA<br>";
echo "================================<br>";

echo "Student Name : " . $studentName . "<br>";
echo "Student ID : " . $studentID . "<br>";
echo "Food Item : " . $foodItem . "<br>";
echo "Price : $" . $price . "<br>";
echo "Quantity : " . $quantity . "<br><br>";

echo "Ordered Items:<br>";

// for loop
for ($i = 1; $i <= $quantity; $i++) {
    echo "Item " . $i . ": " . $foodItem . "<br>";
}

echo "<br>";
echo "Subtotal : $" . $subtotal . "<br>";
echo "Discount : " . $discountPercent . "%<br>";
echo "Discount Amt : $" . $discountAmount . "<br>";
echo "Final Bill : $" . $finalBill . "<br>";

echo "<br>Thank you for visiting!<br>";
echo "================================";

?>