<!-- Object Oriented PHP -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php 
        $brand = "Volvo";
        $color = 'Silver';
        function get_car_info($brand,$color)
        {
            return "Car Brand: " . $brand . " Car Color: " . $color;
        }

        $car_info = get_car_info($brand,$color);
        echo $car_info;

    ?>
 </body>
 </html>