<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
        }
        pre {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
            margin-left: 110px;
        }
        p {
            font-size: 18px;
            color: #333;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .result-box {
            background-color: #a2d5a2AB;
            border-radius: 5px;
            box-shadow: 0 20px 6px rgba(0,0,0,0.2);
            padding: 20px;
            margin-top: 100px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        a:link {
             color: #333;
             background-color: transparent;
            text-decoration: none;
}

        a:visited {
           color: #333;
          background-color: transparent;
        text-decoration: none;
}

        a:hover {
          color: #333;
         background-color: transparent;
         text-decoration: underline;
}

        a:active {
            color: #333;
            background-color: transparent;
            text-decoration: underline;
}
</style>
</head>
<body>
    <div class="result-box">
    <?php

    $height = $_POST["height"];
    if ($height >= 1 && $height <= 30) {
        $pyramid = '';
        for ($i = 1; $i <= $height; $i++) {
            // Print spaces
            for ($j = 1; $j <= $height - $i; $j++) {
                $pyramid .= ' ';
            }
            // Print asterisks
            for ($j = 1; $j <= 2 * $i - 1; $j++) {
                $pyramid .= '*';
            }
            $pyramid .= "\n";
        }
        echo "<h1>Result:";
        echo '<pre>' . $pyramid . '</pre>';
    } else {
        echo "Please enter a number between 1 and 30.";
    }
  
?>
<p><a href="act1.5.html" color="grey" >Return</a> </p>
</div>
</body>
</html>