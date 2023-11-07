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
                <div class="wrapper">
                    <div class="tab-wrapper">
                        <h2>tabs</h2>
                        <ul class="tabs">
                            <li class="tab-link active" data-tab="1">HTML</li>
                            <li class="tab-link" data-tab="2">CSS</li>
                            <li class="tab-link" data-tab="3">jQuery</li>
                        </ul>
                    </div>
                    <div class="content-wrapper">
                        <div id="tab-1" class="tab-content active">Hypertext Markup Language (HTML) is the standard
                            markup language for creating web pages and web applications. With Cascading Style Sheets
                            (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.
                        </div>
                        <div id="tab-2" class="tab-content">CSS stands for Cascading Style Sheets. CSS describes how
                            HTML elements are to be displayed on screen, paper, or in other media. CSS saves a lot of
                            work. It can control the layout of multiple web pages all at once.</div>
                        <div id="tab-3" class="tab-content">jQuery is a fast, small, and feature-rich JavaScript
                            library. It makes things like HTML document traversal and manipulation, event handling,
                            animation, and Ajax much simpler with an easy-to-use API that works across a multitude of
                            browsers.</div>
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

    <script>
        jQuery(function ($) {
            $(".tab-link").on("click", function () {
                var tabID = $(this).attr("data-tab");
                $(this).addClass("active").siblings().removeClass("active");
                $("#tab-" + tabID)
                    .addClass("active")
                    .siblings()
                    .removeClass("active");
            });
        })
    </script>
</body>

</html>