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
                <h2>Alert!</h2>
                <button class="alert btnAlert">Show Alert</button>
                <button class="alert btnConfirm">Show Confirm</button>
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
            $(".btnAlert").on("click", function () {
                alert("hii : )");
            });
            $(".btnConfirm").on("click", function () {
                // if (confirm("Are you sure?")) {
                //     alert("Confirmed! Item deleted");
                // } else
                // alert("Delete Action Canceled!");
                // });

                var answer = confirm("Are you sure?");
                return answer;
            });
        })
    </script>
</body>

</html>