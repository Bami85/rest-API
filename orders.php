<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MySite</title>
</head>
<body>

<header>
    <div class="header-tekst">
      <h1>
       Rest-API
      </h1>
    
      <h2>
       Lankar Meny
      </h2>
    </div>
    
    <div class="header-meny">
      <a href="./products.php">Producs</a><a href="./posts.php">Posts</a><a href="./orders.php">Orders</a><a href="./media.php">Media</a>

    </div>
  </header>
</body>


    <div class="cubo">

        <div class="cubo-sm">


            <?php


                $orderInput = file_get_contents("./JSON/orders.json");  
                $orderInput = json_decode($orderInput, false);

            ?> 

                <div class="sm-12-black">
                    
                    <?php

                    for ($i=0; $i < count($orderInput); $i++) { 
                        $order = $orderInput[$i]; 

                        echo "<table>"; 
                            echo "<tr><td><b>OrderID:</b></td><td>$order->id</td></tr>"; 

                                $orderStatus = $order->status; 
                                if($orderStatus == 'deleted') {
                                    
                                    echo "<tr><td><b>Status:</b></td><td><p style='background-color:#92a8d1; border: medium solid;'> $orderStatus </p></td></tr>"; 
                                } else {
                                   echo "<tr><td><b>Status:</b></td><td><p style='background-color:#80ced6; border: medium solid;'> $orderStatus </p></td></tr>";
                                }

                            echo "<tr><td><b>Totalbelopp:</b></td><td><p><b> $order->total kr</b></p></td></tr>";
                            echo "<tr><td><b>Datum:</b></td><td>$order->date_created</td></tr><br>"; 
                        echo "</table>"; 
                    }

                    ?> 
                </div>
        </div>

    </div>
                        
</body>
</html>