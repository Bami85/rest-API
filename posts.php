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

            <div class="dv-sm">

                <?php

                $postBild = file_get_contents("./JSON/posts.json");  
                $postBild = json_decode($postBild, false);


                for ($i=0; $i < count($postBild); $i++) { 
                    $bilder = $postBild[$i]; 

                    $media = $bilder->guid->rendered; ?>

                    <img class="postBild" src=" <?php echo $media ?> " alt=""> 

                <?php
                }
                ?>
            
            </div>


            <?php
            
            $postData = file_get_contents("./JSON/posts.json");  
            $postData = json_decode($postData, false);
                
    
                ?>
    
                <div class="sm-12-black">
                    <div class="pm-info">
        
                        <?php 
        
                        for ($p=0; $p < count($postData); $p++) { 
                            $post = $postData[$p]; 
        
                            $titel = $post->title->rendered; 
                          
                            $postLink = $post->link; ?> 
                            

                            <h3 class="postsTitel">Posts titel: <a href=" <?php echo $postLink ?> "><?php echo $titel ?></a><br></h3><br>
                            <br>
                            <br>

                        <?php }
                        ?>
        
                    </div>

                </div>

        </div>      

    </div> 
</body>
</html>