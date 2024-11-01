<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Website 2024</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
        }

        .container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 400px;
            width: 100%;
            color: #333;
        }

        h1 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #6a11cb;
        }

        label {
            font-size: 1em;
            color: #444;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            padding: 10px 20px;
            background-color: #6a11cb;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2575fc;
        }

        .result ul {
            list-style: none;
            margin-top: 20px;
            text-align: left;
        }

        .result li {
            padding: 8px;
            font-size: 1em;
            color: #333;
        }

        .result .both {
            color: #6a11cb;
            font-weight: bold;
        }

        .result .special2024 {
            color: #ff6347;
            font-weight: bold;
        }

        .result .pemrograman {
            color: #ffa500;
        }

        .result .website {
            color: #32cd32;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemrograman Website 2024</h1>
        <form method="post">
            <label for="number">Masukkan bilangan bulat positif:</label>
            <input type="number" name="number" id="number" min="1" required>
            <button type="submit">Cetak</button>
        </form>

        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $n = (int)$_POST["number"];
                    echo "<ul>";
                    for ($i = 1; $i <= $n; $i++) {
                        if ($i % 4 == 0 && $i % 6 == 0) {
                            echo "<li class='both'>Pemrograman Website 2024</li>";
                        } elseif ($i % 5 == 0) {
                            echo "<li class='special2024'>2024</li>";
                        } elseif ($i % 4 == 0) {
                            echo "<li class='pemrograman'>Pemrograman</li>";
                        } elseif ($i % 6 == 0) {
                            echo "<li class='website'>Website</li>";
                        } else {
                            echo "<li>$i</li>";
                        }
                    }
                    echo "</ul>";
                }
            ?>
        </div>
    </div>
</body>
</html>
