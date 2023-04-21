<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
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
		$monthly_sales = $_POST["monthly_sales"];
		$commission = 0;

		if ($monthly_sales >= 200000) {
			$commission = ($monthly_sales * 0.3) + 3000;
		} elseif ($monthly_sales >= 150000 && $monthly_sales < 200000) {
			$commission = ($monthly_sales * 0.25) + 2000;
		} elseif ($monthly_sales >= 100000 && $monthly_sales < 150000) {
			$commission = ($monthly_sales * 0.15) + 1000;
		} elseif ($monthly_sales >= 50000 && $monthly_sales < 100000) {
			$commission = $monthly_sales * 0.1;
		} else {
			$commission = $monthly_sales * 0.05;
		}
        echo "<h1>Sales Commission Results:";
		echo "<p>Your monthly sales were ₱" . number_format($monthly_sales, 2) . "</p>";
		echo "<p>Your commission is ₱" . number_format($commission, 2) . "</p>";
	?>
       <p><a href="act1.2.html" color="grey" >Return</a> </p>
    </div>
</body>
</html>
