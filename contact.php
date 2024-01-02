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
        <div class="col-lg-6">
            <form>
            <h3>Contact Name</h3>
            <div class="form group">
                <label>Surname</label>
                <input type="text" name="surNmae" placeholder="Your name in lowercase" class="form-control">
            </div>

            <div class="form group">
                <label>First name</label>
                <input type="text" name="firstNmae" placeholder="Your name in lowercase" class="form-control">
                </div>

                <div class="form group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Gmail" class="form-control">
                    </div>

                    <div class="form group">
                        <label>Telephone</label>
                        <input type="tel" name="Telephone" placeholder="Your telephone" class="form-control">
                    </div>

                    <!--Gender-->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
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