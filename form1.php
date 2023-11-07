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
                        <form>
                            <div class="name">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputEmail">First Name</label>
                                            <div class="nameprefix">
                                                <input type="text" class="form-control" placeholder="Username">
                                                <select class="form-control classic" id="singleSelect">
                                                    <option default></option>
                                                    <option>mr</option>
                                                    <option>ms</option>
                                                    <option>mrs</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputName">LastName</label>
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email address</label>
                                <div class="emailinput"><input type="email" class="form-control" id="inputEmail"
                                        placeholder="Username"></div>

                                <label for="inputweb">website</label>
                                <div class="webinput"><input type="email" class="form-control" id="inputweb"
                                        placeholder="Url..."></div>

                                <label for="password1">Password</label>
                                <input type="password" class="form-control" id="password1"
                                    placeholder="Password Must be 8-20 characters long.">

                                <div class="password2">
                                    <label class="control-label" for="password2">Password with show/hide</label>
                                    <input type="password" id="password2" class="form-control" value="you clicked the eye">
                                    <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                </div>

                                <label for="inputNumber">Number</label>
                                <input type="number" class="form-control" id="inputNum" placeholder="number">

                                <label for="inputTextarea">textarea</label>
                                <textarea class="form-control" id="inputText" rows="3"
                                    placeholder="Enter text here :)"></textarea>

                                <label for="">ReadOnly</label>
                                <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                                <!-- readonly -->

                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="2nd floor,..">

                                <label for="inputAddress">Address2</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Thiruvalleeswar nagar,..">
                            </div>
                            <div class="address3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="form-group">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control classic">
                                                <option selected>Choose</option>
                                                <option>TamilNadu</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formControlRange">Range input</label>
                                <input type="range" min="1" max="100" value="50" class="form-control-range"
                                    id="formControlRange">
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12">
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Check me out</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                                    </div>

                                    <div class="radio">
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="RadioDefault"
                                                id="RadioDefault1">
                                            <label class="form-label-radio" for="RadioDefault1">radio1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="RadioDefault"
                                                id="RadioDefault2">
                                            <label class="form-label-radio" for="RadioDefault2">radio2</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="RadioDefault"
                                                id="RadioDefault3">
                                            <label class="form-label-radio" for="RadioDefault3">radio3</label>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-toggle" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-togglelabel" for="flexCheckChecked">Toggle
                                            checkbox</label>
                                    </div>

                                    <div class="radio">
                                        <div class="form-check">
                                            <input class="form-check-toggleradio" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label-toggleradio"
                                                for="flexRadioDefault1">radio1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-toggleradio" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label-toggleradio"
                                                for="flexRadioDefault2">radio2</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-toggleradio" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3">
                                            <label class="form-check-label-toggleradio"
                                                for="flexRadioDefault3">radio3</label>
                                        </div>
                                    </div>

                                    <div class="inlinecheckbox">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">3</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12">
                                <form>
                                    <div class="form-group selection">
                                        <select class="form-control classic" id="singleSelect">
                                            <option default>select menu</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group multiple-select">
                                        <label for="multiControlSelect">multiple select</label>
                                        <select multiple="multiple" class="form-control" id="multiSelect">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12">
                                <form class="buttons">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button type="button" class="btn-block">button</button>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="color-btn">
                                                <button type="button" class="btn btn-sucess">Sucess</button>
                                                <button type="button" class="btn btn-danger">Danger</button>
                                                <button type="button" class="btn btn-warning">Warning</button>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="color-btn">
                                                <button type="button" class="btn-sucess1">Sucess</button>
                                                <button type="button" class="btn-danger1">Danger</button>
                                                <button type="button" class="btn-warning1">Warning</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        jQuery(function ($) {
            $(".form-check.theme").on("click", () => {
                $(".right-cont").toggleClass("dark");
                $("label").toggleClass("dark");
            });


            $(".toggle-password").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                input = $(this).parent().find("input");
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        })
    </script>
</body>

</html>