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
      <a href="./products.php">Produkter</a><a href="./posts.php">Posts</a><a href="./orders.php">Orders</a><a href="./media.php">Media</a>

    </div>
  </header>
</body>


    <div class="cubo">

        <div class="cubo-sm">
                
                <?php 
            
                $productList = file_get_contents("./JSON/products.json");  
                $productList = json_decode($productList, false);
                             
                ?>

            <div class="productImg">

                    <?php

                    for ($i=0; $i < count($productList); $i++) { 
                        $productPicture = $productList[$i]->images; 

                            for ($p=0; $p < count($productPicture); $p++) { 
                                $img = $productPicture[$p]; 
                                $media = $img->src; ?>
                                
                                <img class="postBild" src=" <?php echo $media ?> " alt="">

                            <?php 
                            }
                            ?>

                    <?php
                    }
                    ?>
            </div>
            <div class="sm-12-black">
                               
                <div class="bg-13-cont">


                    <?php 

                    for ($i=0; $i < count($productList); $i++) { 
                        $product = $productList[$i]; 

                        echo "<table>"; 

                            $link = $product->permalink;
                            $productName = $product->name; 
                            
                            ?>

                            <h3>Product: <a href=" <?php echo $link ?> "><?php echo $productName ?></a></h3>

                            <?php
                            echo "<tr><td><b>Produktens pris: </b></td><td><b> $product->price kr</b></td></tr>";   
                            
                            $category = $product->categories;

                            for ($a=0; $a < count($category); $a++) { 
                                $productCategory = $category[$a]; 
                                $categories = $productCategory->name; 

                                if($categories == 'SWEATSHIRTS AND TRACKSUITS') {
                                
                                    echo "<tr><td><b>Category: </b></td><td><p style='background-color:#673ab773;'> $categories </p></td></tr>"; 
                                } else {
                                    echo "<tr><td><b>Category: </b></td><td><p style='background-color:#a4dba478;'> $categories </p></td></tr>";
                                }

                            }

                        echo "</table>"; 
                    }
                    
                    ?> 
                </div>
                    
            </div>

        </div>

    </div>

</body>
</html>