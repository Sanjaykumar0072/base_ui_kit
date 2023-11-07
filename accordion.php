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
                <ul class="accordion-list">
                    <h2>Accordion</h2>
                    <li>
                        <h3>Accordion</h3>
                        <div class="answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis rem ratione earum
                                deleniti! Itaque sunt sint, suscipit atque vel iusto obcaecati autem impedit veritatis,
                                cupiditate nesciunt quam a ad quos nostrum reiciendis magni nam. Ex odio optio assumenda
                                velit molestiae nemo dolore enim, voluptatem consectetur, sapiente omnis eligendi,
                                temporibus eius!</p>
                        </div>
                    </li>
                    <li>
                        <h3>Accordion</h3>
                        <div class="answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime minima dolor cumque
                                maiores dicta provident error placeat, id quidem deleniti dolorem, natus, rerum iure
                                vero distinctio vitae fugiat exercitationem laboriosam.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Accordion</h3>
                        <div class="answer">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, cupiditate.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Accordion</h3>
                        <div class="answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ratione. Recusandae,
                                veritatis numquam? Quos totam earum hic fugit, repellendus reprehenderit illum dolorum
                                libero. Assumenda ex quibusdam dolores quae nam consectetur quidem tempore, nesciunt
                                suscipit ratione ea, consequuntur beatae itaque neque?</p>
                        </div>
                    </li>
                    <li>
                        <h3>Accordion</h3>
                        <div class="answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis numquam
                                nulla, ab delectus, cum accusantium assumenda in libero asperiores, praesentium cumque
                                rerum neque magni labore quod ex maiores ea modi omnis dicta sit incidunt.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Accordion</h3>
                        <div class="answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus tempora
                                necessitatibus autem quo laborum maiores nostrum doloribus maxime debitis totam libero
                                ipsa voluptates tenetur, veritatis cupiditate fugit nobis. Veniam, consequatur deleniti?
                                Labore nostrum omnis iste! Quam corporis veritatis laborum eius officia quae vitae
                                deserunt. Doloremque necessitatibus placeat suscipit vitae adipisci provident! Voluptate
                                temporibus asperiores eius reprehenderit beatae, laborum aperiam repudiandae, adipisci
                                quos delectus fugit quae. Sunt obcaecati officia voluptatum aperiam est qui provident
                                alias, cumque veniam aspernatur voluptatem totam unde fuga ad minima velit nam
                                veritatis, maxime optio aliquid odio possimus dicta? In quibusdam sit beatae adipisci
                                sunt mollitia.</p>
                        </div>
                    </li>
                </ul>
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
            $(".accordion-list > li > .answer").hide();

            $(".accordion-list > li").on("click", function () {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active").find(".answer").slideUp();
                } else {
                    $(".accordion-list > li.active .answer").slideUp();
                    $(".accordion-list > li.active").removeClass("active");
                    $(this).addClass("active").find(".answer").slideDown();
                }
                return false;
            });
        })
    </script>
</body>

</html>