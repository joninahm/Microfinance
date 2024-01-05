<html>
    <head>
        <meta charset="UTF-8">
        <title>contact page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                    <?php
                include("nav.html");
                ?>
            </div>

            <div class="container">
                <div class="row" style="border:5px red solid">
                    <div class="col-lg-6" style="border:5px red solid">
                        <form>
                            <input type="text" name=email class="form-control" placeholder="Email address">
                        
                            <label>First Name</label>
                            <input type="text" name=firstNAme class="form-control">

                            
                            <label>Surname</label>
                            <input type="text" name=surName class="form-control">

                            <h3>For inquiries send us a message below</h3>

                            <div class="form group">
                                <textarea rows="5" columns="10" input type="text" name="message" placeholder="Kindly leave your message here " class="form-control"></textarea>
                                <button input type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6"style="border:5px red solid">
                        <h4>Our Location</h4>
                        hjdjhdkjdjkdhjdhkdkjddkjdkjkdf
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                include("footer.html")
                ?>
            </div>
        </div>
    </div>
    </body>
</html>