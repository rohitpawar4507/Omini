<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Scheduling Page</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <style>
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 2px;
  cursor: pointer;
}
</style>
    </head>
    <body>
    <button onclick="goBack()"><a href=MenuBar.php>Go Back</a></button>
        <script>
        function goBack() {
        window.history.back();
        }
        <?php
        
       include 'connection.php';
        if(isset($_POST['submit'])){
            $Task = mysqli_real_escape_string($con, $_POST['Task']);
            $Starting_Date = mysqli_real_escape_string($con, $_POST['Starting_Date']);
            $Starting_Time = mysqli_real_escape_string($con, $_POST['Starting_Time']);
            $Due_Date = mysqli_real_escape_string($con, $_POST['Due_Date']);
            $Due_Time = mysqli_real_escape_string($con, $_POST['Due_Time']);

            $Taskquery = "select * from set_proj_schedules where task= '$Task' ";
            $query = mysqli_query($con,$Taskquery);

            $Taskcount = mysqli_num_rows($query);

            if($Taskcount>0){
                ?>
                <script>
                    alert("task already exists");
                </script>
            <?php
               
            }else {
                
                $insertquery = "insert into set_proj_schedules(task, s_date, s_time, e_date, e_time)
                                values('$Task','$Starting_Date','$Starting_Time','$Due_Date','$Due_Time')";
                $iquery = mysqli_query($con, $insertquery);

                if($iquery){
                    ?>
                        <script>
                            alert("inserted successfully");
                        </script>
                    <?php
                }else {
                    
                    ?>
                        <script>
                            alert("not inserted");
                        </script>
                    <?php
                }
            }
        }
        ?>


        <div class="main">
        <div class="schedule">
            <h2>Schedule Here</h2>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" id="schedule" method="POST">
            <label>Task : </label>
            <br>
            <input type="text" name="Task" id="Task" placeholder="Enter the task you want to assign" required>
            <br><br>
            <label>Starting_Date : </label>
            <br>
            <input type="date" name="Starting_Date" id="myDate" required>
            <p id="demo"></p>

        <script>
            function myFunction()
             {
                var x = document.getElementById("myDate").value;
                document.getElementById("demo").innerHTML = x;
             }
        </script>
            <br><br>
            <label>Starting_Time : </label>
            <br>
            <input type="text" name="Starting_Time" id="Starting_Time" placeholder="Enter starting time here" required>
            <br><br>
            <label>Due_Date : </label>
            <br>
            <input type="date" name="Due_Date" id="myDate" required>
            <p id="demo"></p>

        <script>
            function myFunction()
             {
                var x = document.getElementById("myDate").value;
                document.getElementById("demo").innerHTML = x;
             }
        </script>
            <br><br>
            <label>Due_Time : </label>
            <br>
            <input type="text" name="Due_Time" id="Due_Time" placeholder="Enter due date here" required>
            <br><br>
            <input type="submit" value="submit" name="submit" id="submit">
            </form>
            
        </div>
        <h5><a href="display.php"><input type="button" class="button" value="display table" name="display_table"></a></h5>
        </div>
    </body>
</html>