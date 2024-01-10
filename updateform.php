
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
        <?php
        require_once "connect.php";
            if(isset($_GET['id'])){
            $id = $_GET['id'];
            }
            $query = "SELECT * FROM loans";
            $result = mysqli_query($con,$query);
            if(!$result){
                die("query failed".mysqli_error($con));
            }
            else{
                $row = mysqli_fetch_row($result);

            }
                $query = "SELECT * FROM loans WHERE id=?";
                $stmt = mysqli_prepare($con, $query);
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $data = mysqli_fetch_assoc($result);
                

       
        ?>
        <div class="row">
            <div class="col-lg-6">
                <h2>Update info</h2>
                <form action="processupdate.php" method="POST">
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

                    <button type="submit" class="btn btn-warning">Upadate</button>
                </form> 
            </div>                    
        </div>  
    </div>
       
   
</body>
</html>
