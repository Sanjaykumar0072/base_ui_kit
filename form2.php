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
                <form class="right-cont">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <h3>Default</h3>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <div class="name-icon">
                                        <i class="fa fa-user-circle-o" style="font-size:25px"></i>
                                        <input type="text" class="form-control" placeholder="Enter your name">
                                        <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Dropdown</label>
                                    <div class="form-group selection">
                                        <select class="form-select classic">
                                            <option selected>select menu</option>
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
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <textarea class="form-control inputText" rows="3" placeholder="Enter text here :)"></textarea>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Radio</label>
                                    <div class="radio">
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="RadioDefault1" id="Radio1">
                                            <label class="form-label-radio" for="Radio1">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="RadioDefault1" id="Radio2">
                                            <label class="form-label-radio" for="Radio2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Checkbox</label>
                                    <div class="form-check">
                                        <input class="form-check-toggle" type="checkbox" value="">
                                        <label class="form-check-togglelabel">Toggle checkbox</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <div class="web-url num"><p>+91</p></div>
                                        <input class="form-control inputwebs" placeholder="+91 222 222 2222">
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>


                                <div class="form-group">
                                <label class="form-label">Number</label>
                                    <div class="nameprefix">
                                        <input type="number" class="form-control" placeholder="+91 999 999 9999">
                                        <select class="form-select classic" id="singleSelect">
                                            <option default></option>
                                            <option>IND</option>
                                            <option>US</option>
                                            <option>UK</option>
                                            <option>JPY</option>
                                        </select>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <input class="form-control inputmail" placeholder="Enter phone number">
                                        <button class="mail-url num">Submit</button>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="webinputs">
                                        <input class="form-control inputmail" placeholder="abc@gmail.com">
                                        <div class="mail-url"><p>@gmail.com</p></div>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <div class="webinputs">
                                        <div class="web-url"><p>https://</p></div>
                                        <input class="form-control inputwebs" placeholder="website">
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Drag and Drop</label>
                                    <div class="dropzone dz-clickable">
                                        <p>Drag &amp; drop files here to upload</p>
                                        <input type="file" name="file">
                                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                                    </div>
                                </div>

                                <div class="form-group buttons">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="btn">
                                                <button type="button" class="sm-btn">Button</button>
                                                <label class="form-label">Small</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="btn">
                                                <button type="button" class="md-btn">Button</button>
                                                <label class="form-label">Medium</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="btn">
                                                <button type="button" class="lg-btn">Button</button>
                                                <label class="form-label">Large</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Theme</label>
                                    <div class="form-check theme">
                                        <input class="form-check-toggle theme" type="checkbox" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-xs-12 col-sm-6">
                            <h3>Disabled</h3>
                            <div class="form-group">

                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" disabled>
                                    <div class="form-hint"><p class="hint">This is hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <div class="name-icon ">
                                        <i class="fa fa-user-circle-o" style="font-size:25px"></i>
                                        <input type="text" class="form-control icon-name" placeholder="Enter your name" disabled>
                                        <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Dropdown</label>
                                    <div class="form-group selection">
                                        <select class="form-select classic" disabled>
                                            <option selected>select menu</option>
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
                                </div>

                                <!-- <div class="form-group">
                                    <label class="form-label">multi-select</label>
                                    <div class="form-group multiselect">
                                        <select class="form-select multiclassic" multiple disabled>
                                            <option>select menu</option>
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
                                </div> -->

                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <textarea class="form-control inputText" rows="3" placeholder="Enter text here :)" disabled></textarea>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Radio</label>
                                    <div class="radio">
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="Radiodis2" id="Radiodis1" disabled>
                                            <label class="form-label-radio" for="Radiodis1">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="Radiodis2" id="Radiodis2" disabled>
                                            <label class="form-label-radio" for="Radiodis2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Checkbox</label>
                                    <div class="form-check">
                                        <input class="form-check-toggle" type="checkbox" value="" disabled>
                                        <label class="form-check-togglelabel">Toggle checkbox</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <div class="web-url num"><p>+91</p></div>
                                        <input class="form-control inputwebs" placeholder="+91 222 222 2222" disabled>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                <label class="form-label">Number</label>
                                    <div class="nameprefix">
                                        <input type="number" class="form-control" placeholder="+91 999 999 9999" disabled>
                                        <select class="form-select classic" id="singleSelect" disabled>
                                            <option default></option>
                                            <option>IND</option>
                                            <option>US</option>
                                            <option>UK</option>
                                            <option>JPY</option>
                                        </select>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <input class="form-control inputmail" placeholder="Enter phone number" disabled>
                                        <button class="mail-url num">Submit</button>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="webinputs">
                                        <input class="form-control inputmail" placeholder="abc@gmail.com" disabled>
                                        <div class="mail-url"><p>@gmail.com</p></div>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <div class="webinputs">
                                        <div class="web-url"><p>https://</p></div>
                                        <input class="form-control inputwebs" placeholder="website" disabled>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Drag and Drop</label>
                                    <div class="dropzone dz-clickable">
                                        <p>Drag &amp; drop files here to upload</p>
                                        <input type="file" name="file">
                                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                                    </div>
                                </div>

                                <div class="form-group buttons">
                                    <div class="row center-xs">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="btn">
                                                <button type="button" class="sm-btn" disabled>Button</button>
                                                <label class="form-label">Small</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="btn">
                                                <button type="button" class="md-btn" disabled>Button</button>
                                                <label class="form-label">Medium</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-sm-3">
                                            <div class="btn">
                                                <button type="button" class="lg-btn" disabled>Button</button>
                                                <label class="form-label">Large</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Theme</label>
                                    <div class="form-check theme">
                                        <input class="form-check-toggle theme" type="checkbox" value="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <h3>Error</h3>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control error" placeholder="Enter your name">
                                    <div class="form-hint error"><p class="hint error">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <div class="name-icon">
                                        <i class="fa fa-user-circle-o" style="font-size:25px"></i>
                                        <input type="text" class="form-control error" placeholder="Enter your name">
                                        <div class="form-hint error"><p class="hint error">This is a error message</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Dropdown</label>
                                    <div class="form-group selection">
                                        <select class="form-select classic">
                                            <option selected>select menu</option>
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
                                </div>
                                
                                <!-- <div class="form-group">
                                    <label class="form-label">multi-select</label>
                                    <div class="form-group multiselect">
                                        <select class="form-select multiclassic" multiple>
                                            <option>select menu</option>
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
                                </div> -->

                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <textarea class="form-control error inputText" rows="3" placeholder="Enter text here :)"></textarea>
                                    <div class="form-hint error"><p class="hint error">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">radio</label>
                                    <div class="radio">
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="Radioerror3" id="Radioerror1">
                                            <label class="form-label-radio" for="Radioerror1">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-radio" type="radio" name="Radioerror3" id="Radioerror2">
                                            <label class="form-label-radio" for="Radioerror2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Checkbox</label>
                                    <div class="form-check">
                                        <input class="form-check-toggle" type="checkbox" value="">
                                        <label class="form-check-togglelabel">Toggle checkbox</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <div class="web-url num"><p>+91</p></div>
                                        <input class="form-control error inputwebs" placeholder="+91 222 222 2222">
                                    </div>
                                    <div class="form-hint error"><p class="hint error">This is a error message</p></div>
                                </div>


                                <div class="form-group">
                                <label class="form-label">Number</label>
                                    <div class="nameprefix">
                                        <input type="number" class="form-control error" placeholder="+91 999 999 9999">
                                        <select class="form-select classic" id="singleSelect">
                                            <option default></option>
                                            <option>IND</option>
                                            <option>US</option>
                                            <option>UK</option>
                                            <option>JPY</option>
                                        </select>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <input class="form-control error inputmail" placeholder="Enter phone number" disabled>
                                        <button class="mail-url num">Submit</button>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="webinputs">
                                        <input class="form-control error inputmail" placeholder="abc@gmail.com">
                                        <div class="mail-url"><p>@gmail.com</p></div>
                                    </div>
                                    <div class="form-hint error"><p class="hint error">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <div class="webinputs">
                                        <div class="web-url"><p>https://</p></div>
                                        <input class="form-control error inputwebs" placeholder="website">
                                    </div>
                                    <div class="form-hint error"><p class="hint error">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Drag and Drop</label>
                                    <div class="dropzone dz-clickable">
                                        <p>Drag &amp; drop files here to upload</p>
                                        <input type="file" name="file">
                                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                                    </div>
                                </div>

                                <div class="form-group buttons">
                                    <div class="row center-xs">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="btn">
                                                <button type="button" class="sm-btn">Button</button>
                                                <label class="form-label">Small</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="btn">
                                                <button type="button" class="md-btn">Button</button>
                                                <label class="form-label">Medium</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="btn">
                                                <button type="button" class="lg-btn">Button</button>
                                                <label class="form-label">Large</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Theme</label>
                                    <div class="form-check theme">
                                        <input class="form-check-toggle theme" type="checkbox" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                                <h3>Active</h3>
                                <div class="form-group active">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control active" placeholder="Enter your name">
                                        <div class="form-hint">This is hint for user</div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <div class="name-icon">
                                            <i class="fa fa-user-circle-o" style="font-size:25px"></i>
                                            <input type="text" class="form-control icon-name active" placeholder="Enter your name">
                                            <div class="form-hint">This is a hint text to help user</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Dropdown</label>
                                        <div class="form-group selection">
                                            <select class="form-select active classic">
                                                <option selected>select menu</option>
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
                                    </div>

                                    <!-- <div class="form-group">
                                        <label class="form-label">multi-select</label>
                                        <div class="form-group multiselect">
                                            <select class="form-select active multiclassic" multiple>
                                                <option>select menu</option>
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
                                    </div> -->

                                    <div class="form-group">
                                        <label class="form-label">Text</label>
                                        <textarea class="form-control active inputText" rows="3" placeholder="Enter text here :)"></textarea>
                                        <div class="form-hint">This is a hint text to help user</div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Radio</label>
                                        <div class="radio">
                                            <div class="form-check">
                                                <input class="form-radio" type="radio" name="RadioDefault4" id="RadioDefault1" checked>
                                                <label class="form-label-radio" for="RadioDefault1">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-radio" type="radio" name="RadioDefault4" id="RadioDefault2">
                                                <label class="form-label-radio" for="RadioDefault2">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Checkbox</label>
                                        <div class="form-check">
                                            <input class="form-check-toggle" type="checkbox" value="" checked>
                                            <label class="form-check-togglelabel">Toggle checkbox</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <div class="web-url num"><p>+91</p></div>
                                        <input class="form-control active inputwebs" placeholder="+91 222 222 2222">
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>


                                <div class="form-group">
                                <label class="form-label">Number</label>
                                    <div class="nameprefix">
                                        <input type="number" class="form-control active" placeholder="+91 999 999 9999">
                                        <select class="form-select classic" id="singleSelect">
                                            <option default></option>
                                            <option>IND</option>
                                            <option>US</option>
                                            <option>UK</option>
                                            <option>JPY</option>
                                        </select>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <div class="webinputs">
                                        <input class="form-control active inputmail" placeholder="Enter phone number">
                                        <button class="mail-url num">Submit</button>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a error message</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="webinputs">
                                        <input class="form-control active inputmail" placeholder="abc@gmail.com">
                                        <div class="mail-url"><p>@gmail.com</p></div>
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <div class="webinputs">
                                        <div class="web-url"><p>https://</p></div>
                                        <input class="form-control active inputwebs" placeholder="website">
                                    </div>
                                    <div class="form-hint"><p class="hint">This is a hint text to help user</p></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Drag and Drop</label>
                                    <div class="dropzone dz-clickable">
                                        <p>Drag &amp; drop files here to upload</p>
                                        <input type="file" name="file">
                                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                                    </div>
                                </div>

                                <div class="form-group buttons acitve">
                                    <div class="row center-xs">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="btn">
                                                <button type="button" class="sm-btn active">Button</button>
                                                <label class="form-label">Small</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="btn">
                                                <button type="button" class="md-btn active">Button</button>
                                                <label class="form-label">Medium</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="btn">
                                                <button type="button" class="lg-btn active">Button</button>
                                                <label class="form-label">Large</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label class="form-label">Theme</label>
                                    <div class="form-check theme">
                                        <input class="form-check-toggle theme" type="checkbox" value="">
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>

                    </div>
                </form>
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
        })
    </script>
</body>
</html>

