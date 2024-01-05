<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Add user</title>
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
                <h2>Add New User</h2>
                <form action="processform.php" method="POST">
                    <div class="form group">
                        <label for="ClientName">Client Name</label>
                        <input type="text" name="ClientName" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="Reason">Reason for loan</label>
                        <input type="text" name="Reason" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="Principle">Amount of loan</label>
                        <input type="number" name="Principle" class="form-control">
                    </div>

                    <div class="form group">
                        <label for="Interest">Agreed Interest</label>
                        <input type="text" name="Interest" class="form-control" >
                    </div>

                    <button type="submit" class="btn btn-warning">Add user</button>
                </form>  

            </div>                    
        </div>  
    </div>
       
   
</body>
</html>
