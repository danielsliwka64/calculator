<?php
// Pobranie danych z formularza
$amount = $_REQUEST['amount'] ?? null;
$interest = $_REQUEST['interest'] ?? null;
$years = $_REQUEST['years'] ?? null;
$result = null;
$error = null;

if (isset($_REQUEST['calculate'])) {
    if (is_numeric($amount) && is_numeric($interest) && is_numeric($years) && $amount > 0 && $interest >= 0 && $years > 0) {
        // Obliczanie miesięcznej raty kredytu
        $months = $years * 12;
        $r = ($interest / 100) / 12;

        if ($r > 0) {
            $result = round(($amount * $r) / (1 - pow(1 + $r, -$months)), 2);
        } else {
            $result = round($amount / $months, 2);
        }
    } else {
        $error = "Podaj poprawne wartości liczbowe!";
    }
}

// Załadowanie widoku
include 'loan_calc_view.php';
?>
