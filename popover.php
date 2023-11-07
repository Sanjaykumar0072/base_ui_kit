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
            <div class="col-xs-12 col-sm-10">
                <h2>PopOver</h2>
                <div class="popover popover--active">
                    <button class="popover__trigger">default popup</button>
                    <ul class="popover__menu">
                        <li class="popover__menu-item popover_trigger"><button>Action with a long title</button></li>
                    </ul>
                </div>

                <div class="popover">
                    <button class="popover__trigger">Another Menu</button>
                    <ul class="popover__menu">
                        <li class="popover__menu-item"><button>Action</button></li>
                    </ul>
                </div>
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
            $(".popover").on("click", function () {
                $(".popover").not($(this)).removeClass("popover--active");
                $(this).toggleClass("popover--active");
            });
        })
    </script>
</body>

</html>