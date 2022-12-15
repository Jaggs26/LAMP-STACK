<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Add List</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class="container mt-5">

            <h1>Add Bike Information</h1>

            <form action="add.php" method="POST">

                <div class="form-group">

                    <label>Company</label>

                    <input type="text" class="form-control" placeholder="Company" name="company"/>

                </div>

                <div class="form-group">

                    <label> model</label>

                    <input type="text" class="form-control" placeholder="model"  name="model"/>

                </div>

                <div class="form-group">

                    <label>Year</label>

                    <input type="text" class="form-control" placeholder="Year"  name="year"/>

                </div>

                <div class="form-group">

                    <input type="submit" value="Add" class="btn btn-danger" name="button">

                </div>

            </form>

        </div>

<?php

           if(isset($_POST["button"]))

           {
               include("connect.php");
	       $company=$_POST['company'];

               $model=$_POST['model'];

               $year=$_POST['year'];


               $q="insert into list(company,model,year)values('$company','$model','$year')";

               mysqli_query($con,$q);
               header("location:index.php");




           }

         ?>



    </body>

</html>
