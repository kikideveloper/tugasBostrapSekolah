<?php include "lib/class-Db.php"; ?>
<?php include "main/head.php"; ?>
<html>
    <head>
        <?php
        session_start();
        $_SESSION['user'] = "1";
        ?>
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