<?php
    if (isset($_GET['fullName'])){
        print_r($_GET);
//        echo $_GET['fullName'];
    }

    echo '<br>';
    if (isset($_POST['email'])){
        print_r($_POST);
    }

    if(isset($_GET['name'])){
        $name = $_GET['name'];

    }

?>

<html>
    <head>

    </head>
    <body>

        <div>
            <form method="post" action="get_post.php">
                <div>
                    <label>Your Name: </label>
                    <input type="text" name="fullName">
                </div>
                <br>
                <div>
                    <label>Your Email: </label>
                    <input type="email" name="email">
                </div>
                <br>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

        <div>
            <form method="get">
                <ul>
                    <li><a href="get_post.php?name=$100">$100</a></li>
                    <li><a href="get_post.php?name=$200">$200</a></li>
                </ul>
            </form>

        </div>
        <h1>
            <?php $name = '$100'; ?>
            <?php echo "The price is {$name}" ?>
        </h1>
    </body>

</html>