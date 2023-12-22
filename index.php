<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>index page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <?php
             include("nav.html");
            ?>
            </div>
            <div class="row">
                <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner bg-secondary">
                        <div class="carousel-item active">
                            <img src="images/image1.jpg" alt="GFG" width="600" height="300" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/image2.jpg" alt="GFG" width="300" height="400" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/image3.jpg" alt="GFG" width="300" height="500" class="d-block w-50" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    
                    </div>  
            </div>
        </div>
        <script src="js/bootstrap.min.js"> </script>
    </body>
</html>