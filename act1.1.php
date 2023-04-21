<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toll Booth</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            color: #666;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .result-box {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 20px 6px rgba(0,0,0,0.2);
            padding: 20px;
            margin-top: 200px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        a:link {
             color: #666;
             background-color: transparent;
            text-decoration: none;
}

        a:visited {
           color: #666;
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
            // get inputs from user
            $car = $_POST['car'];
            $km = $_POST['kmtrav'];

            // initialize variables
            $chargePerKm = 0;
            $vehicleType = '';
            $ticketColor = '';

            // calculate toll charge based on ticket type
            switch ($car) {
                case "Yellow Car":
                    $chargePerKm = 0.5;
                    $vehicleType = ' Car';
                    $ticketColor = 'Yellow';
                    echo "<style>body { background-color: yellow; }</style>";

                    break;
                case "Blue Light Truck":
                    $chargePerKm = 0.75;
                    $vehicleType = 'Truck';
                    $ticketColor = 'Blue';
                    echo "<style>body { background-color: blue; }</style>";

                    break;
                case "Red Bus":
                    $chargePerKm = 1.0;
                    $vehicleType = ' Bus';
                    $ticketColor = 'Red';
                    echo "<style>body { background-color: red; }</style>";

                    break;
                case "Orange Heavy Truck":
                    $chargePerKm = 1.25;
                    $vehicleType = 'Heavy truck';
                    $ticketColor = 'Orange';
                    echo "<style>body { background-color: orange; }</style>";

                    break;
                default:
                    echo "<h1>Invalid ticket type</h1>";
                    exit();
            }

            // calculate toll charge
            $tollCharge = $chargePerKm * $km;

            // output results
            echo "<h1>Toll Booth Results</h1>";
            echo "<p>Ticket Color: <strong>$ticketColor</strong></p>";
            echo "<p>Vehicle Type: <strong>$vehicleType</strong></p>";
            echo "<p>Toll Charge: <strong>Php $tollCharge</strong></p>";
        ?>
       <p><a href="act1.html" color="grey" >Return</a> </p>
    </div>
</body>
</html>
