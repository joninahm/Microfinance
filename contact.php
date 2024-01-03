<html>
    <head>
        <meta charset="UTF-8">
        <title>contact page</title>
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
                <form>
                    <h3>For inquiries send us a message below</h3>
                    <div class="form group">
                    <textarea rows="5" columns="10" input type="text" name="message" placeholder="Kindly leave your message here " class="form-control"></textarea>
                    <button input type="submit" class="btn btn-success">Submit</button>

                </form>
                
            
            <div class="row">
            <?php
            include("footer.html")
            ?>
            </div>
        </div>
    </div>
    </body>
</html>