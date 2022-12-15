<?php

    include("connect.php");



    if (isset($_POST['btn']))

    {

      $q="select * from list";

      $query=mysqli_query($con,$q);

    }

else

{

      $q= "select * from list";

      $query=mysqli_query($con,$q);

    }

?>



<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>View List</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class="container mt-5">

            <!-- top -->

            <div class="row">

                <div class="col-lg-8">

                    <h1>View Bike List</h1>

                    <a href="add.php">Add Bike data</a>

                </div>

            </div>

           

            <div class="row mt-4">

               

             <?php

                  while ($qq=mysqli_fetch_array($query))

                  {

                 

             ?>


                <div class="col-lg-4">

                    <div class="card">

                        <div class="card-body">

                          <h5 class="card-title"> Company : <?php echo $qq['company']; ?></h5>

                          <h6 class="card-subtitle mb-2 text-muted"> Model : <?php echo $qq['model']; ?></h6>

 <h6 class="card-subtitle mb-2 text-muted">year: <?php echo $qq['year']; ?></h6>

                          <a href="delete.php?item_id=<?php echo $qq['item_id']; ?>" class="card-link">Delete</a>

              		 	 <a href="update.php?item_id=<?php echo $qq['item_id']; ?>" class="card-link">Update</a>

                        </div>



                      </div><br>

                </div>

                <?php

                 



                  }

                ?>

               

            </div>

        </div>

    </body>

</html>

