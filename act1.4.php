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
            margin-left: 160px;
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
	
    $rows = $_POST["rows"];
    if ($rows % 2 == 0 || $rows < 1 || $rows > 19) {
        echo "<p>Invalid input. Please enter an odd number in the range 1 to 19.</p>";
        exit();
    }

    // Generating diamond shape
    $midpoint = ($rows + 1) / 2;
    $diamond = "";
    for ($row = 1; $row <= $rows; $row++) {
        $numSpaces = abs($midpoint - $row);
        for ($i = 0; $i < $numSpaces; $i++) {
            $diamond .= "&nbsp;";
        }
        $numStars = $rows - (2 * $numSpaces);
        for ($j = 0; $j < $numStars; $j++) {
            $diamond .= "*";
        }
        $diamond .= "\n";
    }
    echo "<h1>Result:";
    echo "<p><pre>" . $diamond . "</pre></p>";
	?>
    <p><a href="act1.4.html" color="grey" >Return</a> </p>
</div >
</body>
</html>