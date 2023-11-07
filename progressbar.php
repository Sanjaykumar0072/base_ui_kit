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
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h2>Circular Progress Bars</h2>
                        <div class="circle_percent" data-percent="75">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                        <div class="circle_percent" data-percent="40">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                        <div class="circle_percent" data-percent="50">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                        <div class="circle_percent" data-percent="25">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                        <div class="circle_percent" data-percent="60">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                        <div class="circle_percent" data-percent="100">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                    <h2>line Progress Bars</h2>
                        <div class="progressbar-container">   
                            <div>
                                <p class="skill-title">Html</p>
                                <p class="skill-quantity">100%</p>
                                <div class="skill-box">
                                    <div class="volume"></div>
                                </div>
                            </div>
                            <div>
                                <p class="skill-title">Css</p>
                                <p class="skill-quantity">59%</p>
                                <div class="skill-box">
                                    <div class="volume"></div>
                                </div>
                            </div>
                            <div>
                                <p class="skill-title">JavaScript</p>
                                <p class="skill-quantity">80%</p>
                                <div class="skill-box">
                                    <div class="volume"></div>
                                </div>
                            </div>
                            <div>
                                <p class="skill-title">Figma</p>
                                <p class="skill-quantity">89%</p>
                                <div class="skill-box">
                                    <div class="volume"></div>
                                </div>
                            </div>
                            <div>
                                <p class="skill-title">Sass</p>
                                <p class="skill-quantity">50%</p>
                                <div class="skill-box">
                                    <div class="volume"></div>
                                </div>
                            </div>
                            <div>
                                <p class="skill-title">Sql</p>
                                <p class="skill-quantity">25%</p>
                                <div class="skill-box">
                                    <div class="volume"></div>
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
    
    <script>
        jQuery(function() {
                    
            //////////////////////progressBars////////////////////////////////////////

            /////////////////circular//////////////////////

            $(".circle_percent").each(function(){
            var $this = $(this),
            $dataV = $this.data("percent"),
            $dataDeg = $dataV * 3.6,
            $round = $this.find(".round_per");
            $round.css("transform","rotate(" + parseInt($dataDeg + 180) + "deg)");
            $this.append('<div class = "circle_inbox"><span class = "percent_text"></span></div>');
            $this.prop("counter",0).animate({counter: $dataV},
                {
                duration:2000,
                easing: 'swing',
                step: function(now){
                    $this.find(".percent_text").text(Math.ceil(now)+"%");
                }
                });
                if($dataV >= 51){
                $round.css("transform","rotate(" + 369 + "deg)");
                setTimeout(function(){
                    $this.addClass("percent_more");
                },1000);
                setTimeout(function(){
                    $round.css('transform',"rotate(" + parseInt($dataDeg + 180) + "deg)");
                },1000);
                }
            });

            ////////////////////////line///////////////////////////////////

            const progressbarContainer = document.querySelector('.progressbar-container');
            const totalWidth = parseInt(getComputedStyle(progressbarContainer).width);
            const volume = document.querySelectorAll('.volume');
            // resize the volume of boxes with the values
            volume.forEach(element => {
                const vol = parseInt(element.parentElement.parentElement.children[1].innerText);
                element.style.width = `${vol}%`;
            });
            // Change the Pointer of Volume
            const skillQuantity = document.querySelectorAll('.skill-quantity');

            skillQuantity.forEach(element => {
                let val = parseInt(element.innerText);
                // becuase the pointer overflow of box in 100%
                if (val == 100) {
                    val -= .4;
                }
                // Width of valueText / 2 => put on the pointerLine
                const textWidth = parseInt(getComputedStyle(element).width) / 2;
                //calcute the place of the pointer
                element.style.right = `${totalWidth-textWidth-(val*totalWidth/100)}px`
            });

        });
    </script>
</body>
</html>