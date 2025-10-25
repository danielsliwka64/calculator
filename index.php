<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calc {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input, select {
            margin: 5px;
            padding: 8px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="calc">
    <h2>Prosty kalkulator</h2>
    <form method="post" action="">
        <input type="number" name="num1" step="any" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">−</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="num2" step="any" required>
        <button type="submit" name="oblicz">Oblicz</button>
    </form>

    <?php
    if (isset($_POST['oblicz'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $wynik = 0;

        switch ($operator) {
            case '+':
                $wynik = $num1 + $num2;
                break;
            case '-':
                $wynik = $num1 - $num2;
                break;
            case '*':
                $wynik = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    echo "<p style='color:red'>Błąd: dzielenie przez zero!</p>";
                    exit;
                }
                $wynik = $num1 / $num2;
                break;
        }

        echo "<h3>Wynik: $wynik</h3>";
    }
    ?>
</div>
</body>
</html>
