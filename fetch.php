<?php

    require_once('connect.php');
    $query ="SELECT * FROM loans";
    $result = mysqli_query($con,$query);



?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-ua-Compactible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Fetch data From Database in Php</title>
    </head>
    <body class="bg-dark">
        <div class="container">
            <div class="row">
                <?php
                    include("nav.html");
                ?>
            </div>
            
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Fetch Data From Database in Php</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>ID</td>
                                    <td>Client Name</td>
                                    <td>Reason</td>
                                    <td>Principle</td>
                                    <td>Interest</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <?php

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['ClientName']; ?></td>
                                    <td><?php echo $row['Reason']; ?></td>
                                    <td><?php echo $row['Principle']; ?></td>
                                    <td><?php echo $row['Interest']; ?></td>
                                    <td><a href="updateform.php?id=<?php echo $row['ID'];?>">Update</a></td>
                                    <td><a href="#" class="btn btn-outline-danger">Delete</a></td>
                                </tr>
                                <?php
                                }

                                ?>
                      
                                
                            </table>
                        </div>
                    </div>
            </div>
                       
        </div>
            
               
            
       </div>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>