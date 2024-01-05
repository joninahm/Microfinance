<html>
    <head>
        <title>add page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
                  include("nav.html");
                ?>
            </div>

             <div class="row">
                <div class="col-lg-12">
                <form>
                    <h3 style="background-color:lightskyblue; color:darkred; text-align:center;">Secure yout financial problems and apply for a loan with us</h3>
                    <div class="form group">
                        <label for="surname">Surname</label>
                        <input type="text" name="surName" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="first name">First name</label>
                        <input type="text" name="firstName" class="form-control" style="float:right;">
                    </div>

                    <div class="form group">
                        <input type="radio" name="gender" value="Female" id="g-female">
                        <label for="g-female">Female</label>
                        <input type="radio" name="gender" value="Male" id="g-male">
                        <label for="g-male">Male</label>     
                    </div>


                    <div class="form group">
                        <label for="address">Address</label>
                        <input type="text" name="surName" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="telephone">Telephone</label>
                        <input type="tel" name="telephone" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="work">Workplace</label>
                        <input type="text" name="earning" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>  
                </div>
            </div>
            <div class="row">
            <?php
            include("footer.html")
            ?>
            </div>
        </div>
    

    </body>
</html>