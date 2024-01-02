<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>index page</title>
    <style>
        img{
            object-fit:cover;
            border-radius:30px;
        }
        .image1{
            border-radius:150px;
            float:left;
            margin-right:20px;
        }
        nav{
            float:right;
            margin-left:50px;
            font-size:20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include("nav.html");
            ?>
        
        <div class="row">
         <?php
         include("carousel.html");
         ?> 
        </div>
        <div class="row">
            <?php
            include("footer.html")
            ?>
        </div>
    </div>
    <script src="js/bootstrap.min.js"> </script>
</body>

</html>