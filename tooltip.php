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
                <div class="section">
                    <h2>Tooltip</h2>
                    <div class="tool">
                        <div class="button" data-tooltip="Tooltip top">Hover me!</div>
                        <div class="button-secondary" data-tooltip="Tooltip bottom" data-tooltip-location="bottom">Hover me!</div>
                        <div class="button" data-tooltip="Tooltip left" data-tooltip-location="left">Hover me!</div>
                        <div class="button-secondary" data-tooltip="Tooltip right" data-tooltip-location="right">Hover me!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="footer"></div>
        </div>
    </div>
</body>
</html>