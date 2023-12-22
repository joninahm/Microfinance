<html>
    <head>
        <title>add page</title>
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
        <div class="col-lg-12">
          <form>
            <h3>Submission form</h3>
            <div class="form group">
                <label for="surname">Surname</label>
                <input type="text" name="surName" class="form-control" placeholder="Local Name">
            </div>

            <div class="form group">
                <label for="first name">First name</label>
                <input type="text" name="firstName" class="form-control" placeholder="Religious Name">
            </div>

            <div class="form group">
                <label for="address">Address</label>
                <input type="text" name="surName" class="form-control" placeholder="District/Subcounty">
            </div>

            <div class="form group">
                <label for="telephone">Telephone</label>
                <input type="tel" name="telephone" class="form-control" placeholder="Registered">
            </div>

            <div class="form group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="@gmail/yahoo">
            </div>

            <div class="form group">
                <label for="earning">Type of earning</label>
                <input type="text" name="earning" class="form-control" placeholder="salary/wage">
            </div>

            <div class="form group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
        </div>
    </div>
    </div>
    

    </body>
</html>