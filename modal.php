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
            <h2>Modal</h2>
                <div class="modal-cont">
                    <div class="interior">
                        <a class="btn" href="#open-modal">👋 Basic CSS</a>
                    </div>
                    <div id="open-modal" class="modal-window">
                        <div class="popup">
                            <!-- <a href="#" title="Close" class="modal-close">Close</a> -->
                            <div class="popup-cont">
                                <h3>Popup Title</h3>
                                <p>popup description.</p>
                                <div class="modal-btn">
                                    <a href="#" title="Close" class="modal-close">Close</a>
                                    <button>submit</button>
                                </div>
                            </div>
                        </div>
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