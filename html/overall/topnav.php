<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="mbri-laptop mbr-iconfont mbr-iconfont-menu navbar-logo"></a>
                        <a class="navbar-caption" href="https://mobirise.com"><?php echo APP_TITLE?></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>
                    
                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="html/public/login.html">OVERVIEW</a></li>
                        <?php
                        if(!isset($_SESSION['app_id'])){
                         echo '<li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="html/public/reg.html">REGISTRARSE</a></li>
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline"  data-toggle="modal" data-target="#Login">INICIAR SESIÓN</a></li></ul>';
                            
                        }
                        else{
                           echo ' <li class="nav-item"><a class="nav-link link" href="#">'. strtoupper($users[$_SESSION['app_id']]['nombre']) .'</a></li>
                                <li class="nav-item"><a class="nav-link link" href="#">MI PERFIL</a></li>';
                        }
                        ?>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<?php 
if(!isset($_SESSION['app_id'])){
include(HTML_DIR . 'public/login.html');
}
?>