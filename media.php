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
      <a href="./products.php">Products</a><a href="./posts.php">Posts</a><a href="./orders.php">Orders</a><a href="./media.php">Media</a>

    </div>
  </header>
</body>


    <div class="cubo">

        <div class="cubo-sm">
            <?php
                $mediaInput = file_get_contents("./JSON/media.json");  
                $mediaInput = json_decode($mediaInput, false);

                ?> 

                <div class="M-div">
                
                    <?php
                    for ($i=0; $i < count($mediaInput); $i++) { 
                        $media = $mediaInput[$i]; 

                        $media = $media->guid->rendered;

                      ?>

                      <img class="postBild" src=" <?php echo $media ?> " alt="#">  
                                            
                    <?php }

                    ?> 

                </div>
        </div>
    </div>
</body>
</html>

