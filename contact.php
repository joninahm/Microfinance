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

                    <!--Movies-->
                    <div class="form-group">
                        <label for="movies">Use control and the mouse to select movies:</label>
                        <select class="form-control" name="movies[]" multiple>
                            <option value="robot">Mr Robot</option>
                            <option value="Silican">Silican Valley</option>
                            <option value="creator">The Creator</option>
                            <option value="imagine">Imagination</option>
                        </select>
                    </div>
                    <hr/>
                    <label for="Python">Python</label>
                    <input type="checkbox" name="python">

                    <label for="PHP">Php</label>
                    <input type="checkbox" name="php">

                    <label for="Java">Java</label>
                    <input type="checkbox" name="java">

                    <label for="Javascript">Javascript</label>
                    <input type="checkbox" name="js">

                    <br/>

                    <button type="submit" class="btn btn-danger">Submit</button>
            </form>
            <div class="row">
                <p>This is a contact form</p>
            </div>
        </div>
    </div>
    </body>
</html>