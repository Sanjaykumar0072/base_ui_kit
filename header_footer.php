<?php include('header.php'); ?>

<body>
    <div class="row">
        <div class="col-xs-12">
            <div class="header">
                <h1>Base UI</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php include('sidebar.php'); ?>
            <div class="col-xs-12 col-sm-9 col-md-10">
                <header>
                    <div class="container">
                        <div class="row middle-xs">
                            <div class="col-xs-6 col-sm-2">
                                <div class="logo"><a href="javascript.void(#)"><img src="" alt="" /></a></div>
                            </div>
                            <div class="col-xs-6 col-sm-8">
                                <div class="row end-xs">
                                    <div class="ham-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <ul class="menu">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Widgets</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a class="nav-button" href="£">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="footer"></div>
        </div>
    </div>

    <script>
        jQuery(function ($) {
            $(".ham-icon").on("click", function () {
                $('.ham-icon').toggleClass('active-one');
                $("header .menu").slideToggle();
            });
        })
    </script>
</body>

</html>