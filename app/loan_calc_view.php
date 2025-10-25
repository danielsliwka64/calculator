<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator kredytowy</title>
    <style>
        body { font-family: Arial; background: #f3e6d7ff; padding: 50px; }
        .container { background: white; max-width: 450px; margin: auto; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; background: #f3e6d7ff; padding: 20px; border: none; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        label { display: block; margin-top: 10px; }
        input { width: 95%; padding: 8px; margin-top: 5px;}
        button { width: 100%; margin-top: 15px; padding: 10px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .result { background: #e8ffe8; padding: 10px; border-radius: 5px; margin-top: 15px; text-align: center; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>
<div class="container">
    <h2>Kalkulator kredytowy</h2>
    <form method="request" action="">
        <label>Kwota kredytu (PLN):</label>
        <input type="number" name="amount" step="0.01" value="<?= htmlspecialchars($amount ?? '') ?>" required>

        <label>Oprocentowanie (% rocznie):</label>
        <input type="number" name="interest" step="0.01" value="<?= htmlspecialchars($interest ?? '') ?>" required>

        <label>Okres spłaty (lata):</label>
        <input type="number" name="years" step="1" value="<?= htmlspecialchars($years ?? '') ?>" required>

        <button type="submit" name="calculate">Oblicz ratę</button>
    </form>

    <?php if ($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <?php if ($result !== null): ?>
        <div class="result">
            <strong>Miesięczna rata: <?= $result ?> PLN</strong>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
