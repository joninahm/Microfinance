<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>display page</title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="border:2px solid red">
            <?php
                include("nav.html");
            ?>
        <div class="row" style="border:2px solid green">
            <table border="1">
                <tr style="color:red">
                    <th>Class</th>
                    <th>Year</th>
                    <th>Position</th>
                </tr>
                <tr style="color:green">
                    <td>John</td>
                    <td>2019</td>
                    <td>1</td>
                </tr>
                <tr style="color:green">
                    <td>Mary</td>
                    <td>2021</td>
                    <td>2</td>
                </tr>
                <tr style="color:green">
                    <td>Doe</td>
                    <td>2018</td>
                    <td>5</td>
                </tr>
                <tr style="color:green">
                    <td>Faith</td>
                    <td>2022</td>
                    <td>6</td>
                </tr>
                <tr style="color:green">
                    <td>Doe</td>
                    <td>2017</td>
                    <td>1</td>
                </tr>
            </table>
        </div>
    <div class="row" style="border:2px solid yellowgreen">
        <p>This is the footer</p>
    </div>

    </body>
</html>