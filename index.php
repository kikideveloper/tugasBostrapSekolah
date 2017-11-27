<?php
session_start();
include "lib/class-Db.php";
if (!isset($_SESSION['user'])) {
    $ff->redirect('login.php');
}
?>
<html>
    <head>
        <?php include "main/head.php"; ?> 
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <?php include "main/header.php"; ?>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <?php include "main/sidebar_menu.php"; ?>
                </section>
            </aside>
            <div class="content-wrapper">
                <?php
                $p = isset($_GET['p']) ? $_GET['p'] : "content";
                include "main/$p.php";
                ?>
            </div>
            <footer class="main-footer">
                <?php include "main/footer.php"; ?>
            </footer>
        </div>
    </body>
</html>
<?php include "js/js.php"; ?>