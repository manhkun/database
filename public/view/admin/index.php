<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="../../css/style.css" type="text/css">

</head>
<body>
    <?php
        session_start();
    ?>
    <header class="header">
        <div class="inner-header">
            <div class="logo">
                <a href="./index.php"><img src="../../../img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="../../../img/icons/search.png" alt="" class="search-trigger">
                <img src="../../../img/icons/man.png" alt="">    
                <?php
                    if(isset($_SESSION['name'])){
                    echo " <a href=\"login.php\">
                                <img src=\"../../../img/icons/log_out.png\" title=\"Đăng xuất\" alt=\"\">
                            </a>";
                    }
                ?>
            </div>
            <div class="user-access">
                <?php
                    if(isset($_SESSION['name'])){
                        echo "<a href=\"./index.php\">{$_SESSION['name']}</a>";
                    }
                ?>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="toolbar">

        </div>
        <div class="container">

        </div>
    </div>
    <footer class="footer">

    <footer>
</body>
</html>