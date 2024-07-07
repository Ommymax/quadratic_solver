<?php
$result1 = "";
$result2 = "";

if (isset($_POST['submit'])) {
    $a = $_POST['value_a'];
    $b = $_POST['value_b'];
    $c = $_POST['value_c'];
    $d = ($b * $b) - (4 * $a * $c);

    if ($d < 0) {
        echo "
        <script>
        alert('Its a complex number');
        window.location = 'quadrati.php';
        </script>";
    } elseif ($d == 0) {
        $result1 = -$b / (2 * $a);
    } else {
        $result1 = (-$b + sqrt($d)) / (2 * $a);
        $result2 = (-$b - sqrt($d)) / (2 * $a);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Solver</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quadratic Solver</h1>
        <form method="post">
            <label for="a">Coefficient of x²</label>
            <input type="number" step="any" placeholder="Enter value of x²..." name="value_a" required>
            
            <label for="b">Coefficient of x</label>
            <input type="number" step="any" placeholder="Enter value of x..." name="value_b" required>
            
            <label for="c">Constant term</label>
            <input type="number" step="any" placeholder="Enter value of constant..." name="value_c" required>
            
            <input type="submit" name="submit" value="Solve">
            
            <div class="result">
                <?php if ($result1 !== "" || $result2 !== ""): ?>
                    The answer is <br>
                    x1 = <?php echo $result1; ?><br>
                    x2 = <?php echo $result2; ?>
                <?php endif; ?>
            </div>
        </form>
    </div>
</body>
</html>
