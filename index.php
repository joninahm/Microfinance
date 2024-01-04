<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>index page</title>
    <style>
        .card-header{
            background-color:darkred;
            color:lightskyblue;
        }
        .card{
            border-radius:30px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include("nav.html");
            ?>
        </div>

        <div class="row">
            <?php
            include("carousel.html");
            ?> 
        </div>
        <hr>
        <div class="row">
            <h3 align="center" style="background-color:lightskyblue; color:darkred;">OUR FEATURED SERVICES</h3>
            <!--School fees-->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header">
                <marquee behavior="alternate">
                  <h3 class="card-title" style="background-color:freshblue">
                  School fees
                  </h3>
                  </marquee>
                </div>  
                  <div class="card-body">
                  When the little ones are going to school Prosper can help you acquire a loan in a short period and with a negotiable interest per month. Secure your child's education with Prosper inorder to groom responsible and successful citizens
                  </div>
            </div>
          </div>
        
              
                <!--Tax clearnce-->
                <div class="col-lg-3">
                  <div class="card">
                    <div class="card-header">
                        <marquee behavior="alternate">
                      <h3 class="card-title">
                      Tax clearance
                      </h3>
                      </marquee>
                    </div>
                    <div class="card-body">
                    For all your emergency tax  clearance for your business Prosper is here to takecare of that by offering you aloan to save your business and the interest per month is negotiable. Secure your business with Prosper so that it runs smoothly with no disturbances. 
                    </div>
                  </div>
                </div>
                
                
                <!--Medical Bills-->
                <div class="col-lg-3">
                  <div class="card">
                    <div class="card-header">
                        <marquee behavior="alternate">
                      <h3 class="card-title">
                        Medical Bills
                      </h3>
                      </marquee>
                    </div>
                      <div class="card-body">
                       Medical emergencies are always unexpected like surgeries,treatment and among others but Prosper is here you sort that out through their fast loans and negotiable interests per month.Secure your health and the health ofyour children with Prosper to live a comfortable life.
                      </div>
                  </div>
                </div> 

                  <!--Emergencies-->
                  <div class="col-lg-3">
                  <div class="card">
                    <div class="card-header">
                        <marquee behavior="alternate">
                      <h3 class="card-title">
                        Emergencies
                      </h3>
                      </marquee>
                    </div>
                      <div class="card-body">
                       For any kind of emergencies like accidents,death,car breakdown and among other Prosper is here for you to offer you fast loans and negotiable interests per month.Secure your future with Prosper to solve problems that may come your way
                      </div>
                  </div>
                </div> 
        </div>  
        <hr>
        <div class="row">
            <?php
            include("footer.html")
            ?>
        </div>
        
    </div>
    <script src="js/bootstrap.min.js"> </script>
</body>

</html>