<?php
error_reporting(0);
include 'connection.php';

    $Task = mysqli_real_escape_string($con, $_POST['Task']);
    $Starting_Date = mysqli_real_escape_string($con, $_POST['Starting_Date']);
    $Starting_Time = mysqli_real_escape_string($con, $_POST['Starting_Time']);
    $Due_Date = mysqli_real_escape_string($con, $_POST['Due_Date']);
    $Due_Time = mysqli_real_escape_string($con, $_POST['Due_Time']);

    $insertquery = "select * from set_proj_schedules";
    $query = mysqli_query($con,$insertquery);
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <button onclick="goBack()"><a href="http://localhost/DEMOD/MenuBar.php">Go Back</a></button>
        <script>
        function goBack() {
        window.history.back();
        }
        </script>
        <div class="container">
        <div class="col-lg-12 m-auto">
            <br><br>
            <h1 class="text-warning text-center" >DISPLAY SCHEDULE</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>TASK</th>
                    <th>STARTING DATE</th>
                    <th>STARTING TIME</th>
                    <th>DUE DATE</th>
                    <th>DUE TIME</th>
                </tr>

                <?php
                   include 'connection.php';

                    $insertquery = "select * from set_proj_schedules";
                    $query = mysqli_query($con,$insertquery);
                    while($res = mysqli_fetch_array($query)){
                ?>


                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['task']; ?></td>
                    <td><?php echo $res['s_date']; ?></td>
                    <td><?php echo $res['s_time']; ?></td>
                    <td><?php echo $res['e_date']; ?></td>
                    <td><?php echo $res['e_time']; ?></td>
                </tr>
                <?php
                    }
                ?> 
            </table>

        </div>
        </div>
    </body>
</html>