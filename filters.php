<?php
//    if(isset($_POST["emailData"])){
//        if(filter_input(INPUT_POST, 'emailData',
//        FILTER_VALIDATE_EMAIL)){
//            echo '邮箱格式合法';
//        }else{
//            echo '不合法的邮箱';
//        }
//    }

    if(isset($_POST["emailData"])){
        $email = $_POST["emailData"];
        echo $email;

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "邮箱是合法的！";
        }else{
            echo "这是不合法的邮箱格式";
        }
    }

?>


<html>

    <body>
        <form method="post" action="<?php  ?>">
                    <!--  echo $_SERVER['PHP_SELF']-->
            <input type="email" name="emailData"/>
            <button type="submit">Submit</button>
        </form>
    </body>

</html>






