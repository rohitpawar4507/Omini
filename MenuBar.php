<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Year Schedule</title>
    <!--<link rel="stylesheet" href="style1.css">-->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesh" href="link.php">
    <style>
.button {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 1px 1px;
  cursor: pointer;
}
</style>
</head>
<body>
    <div class="Schedulling">
    <ul>
    <li><i class="fa fa-angle-left"></i><a href="#"><input type="button" class="button" value="go back" name="go back"></a></li>
    </ul>
    <ul>
        <li class="active"><i class="fa fa-home"></i>Home</a></li>
        
        <li><a href="#"><i class="fa fa-calendar-plus-o"></i>Set Schedule</a>
        <div class="sub-schedulling-1">
            <ul>
                <li class="hover-me"><a href="#">T.E(Sem-l)</a><i class="fa fa-angle-right"></i>
                    <div class="schedulling-1">
                        <ul>
                            <li><a href="scheduling.php">SDL</a></li>
                            <li><a href="scheduling.php">DBMS</a></li>
                        </ul>
                    </div></li>
                <li class="hover-me"><a href="#">T.E(Sem-ll)</a><i class="fa fa-angle-right"></i>
                    <div class="schedulling-1">
                        <ul>
                            <li><a href="scheduling.php">WT</a></li>
                            <li><a href="scheduling.php">IoT</a></li>
                        </ul>
                    </div></li>
                <li class="hover-me"><a href="#">B.E</a><i class="fa fa-angle-right"></i></li>
            </ul>
        </div> 
        </li>
        <!-----
        <li><a href="#"><i class="fa fa-book"></i></i>Subject</a>
            <div class="sub-schedulling-1">
                <ul>
                    <li><a href="#">SDL</a></li>
                    <li><a href="#">DBMS</a></li>
                    <li><a href="#">WT</a></li>
                    <li><a href="#">IoT</a></li>
                </ul>
            </div>
        </li>
    
        <li class= "hover-me"><a href="http://127.0.0.1:5500/Schedule(web).html"><i class="fa fa-calendar-plus-o"></i>Set Schedule</a></li>
    -->
        <li><a href="#"><i class="fa fa-calendar-plus-o"></i>view Schedule</a>
        <div class="sub-schedulling-1">
            <ul>
                <li class="hover-me"><a href="#">T.E(Sem-l)</a><i class="fa fa-angle-right"></i>
                    <div class="schedulling-1">
                        <ul>
                            <li><a href="view.php">SDL</a></li>
                            <li><a href="view.php">DBMS</a></li>
                        </ul>
                    </div></li>
                <li class="hover-me"><a href="#">T.E(Sem-ll)</a><i class="fa fa-angle-right"></i>
                    <div class="schedulling-1">
                        <ul>
                            <li><a href="view.php">WT</a></li>
                            <li><a href="view.php">IoT</a></li>
                        </ul>
                    </div></li>
                <li class="hover-me"><a href="view.php">B.E</a><i class="fa fa-angle-right"></i></li>
            </ul>
        </div> 
        </li></li>
    </ul>
    </div>
</body>
</html>