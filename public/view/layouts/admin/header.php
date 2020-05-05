<header class="header-section">
        <div class="logo">
            <a href="./index.php"><img src="../../../img/logo.png" alt=""></a>
        </div>
        <div class="header-right">
            <div class="user-access row">
                <?php
                    include('../../../model/connect.php');
                   $adminInNow =  mysqli_fetch_array( mysqli_query($con, "SELECT *  FROM users  WHERE id = '{$_SESSION['id']}' "));
                    if(isset($_SESSION['name'])){
                        echo "  <a href=\"./index.php\">{$adminInNow['name']}</a>";
                    }
                ?>
            </div>  
            <div id="user-logo" class="row">
                <img  src="../../../img/icons/man.png" alt=""> 
            </div>
            <div class="logout row">
                <?php
                
                if(isset($_SESSION['name'])){
                    echo "   <a href=\"../../../controller/admin/logout.php\">
                                    <img src=\"../../../img/icons/log_out.png\" title=\"Đăng xuất\"  alt=\"\">
                                </a>";
                }
                ?>
            </div>
        </div>
    </header>