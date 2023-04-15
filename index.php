<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán rượu</title>
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <link rel="stylesheet" href="./css/stylesnew.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
    session_start();
        if(isset($_GET['user'])){
            $user = $_GET['user'];
            if($user==='admin'){
                include("pageAdmin.php");
            }
            else{
                include("pageProduct.php");
            }
        }
        else{
            include("pageProduct.php");

        }
    session_unset();
    session_destroy();
    ?>
</body>
<script src="./js/jsPage.js"></script>
<script src="./js/content_admin_user_manager.js"></script>
</html>
