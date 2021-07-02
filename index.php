<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungry Hub</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/mainheader.css">
    <link rel="stylesheet" href="./css/customstyle.css">
    <!-- <link rel="stylesheet" href="loginheader.css"> -->
</head>
<body>

    <!-- Header Section Starts -->
    <div class="header">
        <a href="./index.php">
            <img class="header_logo" src="./assets/mainlogo_black.png">
        </a>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./login.php">log in</a></li>
            </ul>
        </nav>
    </div>
    <!-- Header Section Ends -->
    
    <div class="search_bar_container">
        <form class="search_from">
            <div class="search_bar">
                <i class="fa fa-search"></i>
                <input type="text" class=""placeholder="Search for Restaurants, cafes, places...">
            </div>
        </form>
    </div>
    
    <div class="restaurant_zone"> 
        <div class="rows">
            
            <?php 
            require 'config.php';
            
            $query = "SELECT * FROM test1";
            $query_run = mysqli_query($conn, $query);
            $query_check = mysqli_num_rows($query_run) > 0;

            if($query_check)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                        <div class="cols">
                            <div class="card_body">
                                <h4><?php echo $row['resname'] ?></h4>
                                <h5><?php echo $row['description'] ?></h5>
                                <p><?php echo $row['images'] ?></p>
                            </div>
                        </div>
                    <?php
                }
            }
            else
            {
                echo "Oops Somthing went wrong...";
            }
            ?>
            
        </div>
    </div>
</body>
</html>