<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
       $company=$_POST['company'];

               $model=$_POST['model'];

               $year=$_POST['year'];
        $item_id = $_GET['item_id'];
        $q= "update list set company='$company', model='$model' ,year='$year' where item_id=$item_id";
        $query=mysqli_query($con,$q);
        header('location:index.php');
    } 
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Update Bike List</h1>
            <form method="post">
                <div class="form-group">
                    <label> company</label>
                    <input type="text" class="form-control" name="company" placeholder="company" value="<?php echo $res['company'];?>"/>
                </div>
                <div class="form-group">
                    <label>model</label>
                    <input type="text" class="form-control" name="model" placeholder="model" value="<?php echo $res['model'];?>"/>
                </div>
                <div class="form-group">
                    <label>year</label>
                    <input type="text" class="form-control" name="year" placeholder="year" value="<?php echo $res['year'];?>"/>
                </div>
              
                <div class="form-group">
                    <input type="submit" value="Update" name="btn" class="btn btn-danger">
                </div>
            </form>
        </div>
    </body> 
</html>
