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
            margin-left: 115px;
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
            margin-top: 200px;
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
    $size = $_POST["size"];

    // Generate the top and bottom rows of the square
    if ($size < 1 || $size > 20) {
        echo "Invalid input. Please enter a size between 1 and 20.";
    } else {
        // Generate the top and bottom rows of the square
        $top_bottom = str_repeat("*", $size);

        // Generate the middle rows of the square
        $middle = "";
        for ($i = 1; $i <= $size - 2; $i++) {
            $middle .= "*";
            for ($j = 1; $j <= $size - 2; $j++) {
                $middle .= " ";
            }
            $middle .= "*\n";
        }

        // Print the square
        echo "<h1>Result:";
        echo "<pre>";
        echo $top_bottom . "\n";
        echo $middle;
        echo $top_bottom;
        echo "</pre>";
    }

?>
<p><a href="act1.3.html" color="grey" >Return</a> </p>
</div>
</body>
</html>