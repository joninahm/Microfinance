<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>about page</title>
    </head>
      <body>
        <div class="container">
        <div class="row">
         <?php
         include("nav.html");
         ?>
        </div>

        <div class="row">
          <!--List-->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <marquee>
                  <h3 class="card-title">
                  Why I love pogramming?
                  </h3>
                </marquee>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">It is easy and fun</li>
                  <li class="list-group-item">It enables me become a web designer</li>
                  <li class="list-group-item">It enables me better the world through websites</li>
                </ul>
              </div>
            </div>
            </div>
          </div>
        
              
                <!--Image-->
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <img src="images/image1.jpg" class="img-fluid" width="400" height="500">
                    </div>
                  </div>
                </div>
                
                
                <!--Creative content-->
                <div class="col-lg-4">
                  <div class="card" style="width: 15rem;">
                    <div class="card-footer">
                    <h3 class="card-title">Loans</h3>
                    <p>When one gets loans they are supposed tobe paid back in a given amount of time so if not paid back they could be taken under legal action</p>
                    <a href="#" class="btn btn-primary">Get More information</a>
                  </div>
                </div>
                
            </div>  
          </div>
        </div>
        <div class="row">
            <p>Prosper microfinance offers loans to only salary earners</p>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>