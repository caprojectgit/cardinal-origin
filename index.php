<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSS Grid: Flex</title>
    <!--<link rel="stylesheet" href="dist/css/ca.flex.min.css">-->
    <link rel="stylesheet" href="dist/css/css.grid.css">
    <!--    <link rel="stylesheet" href="dist/css/display.css">-->



</head>

<body>

    <!-- containter -->
    <div id="ca-container">

        <section>
            <div class="column   quarter" style="max-width:25%">
                <div class="acura inner">
                    Quarter
                </div>
            </div>
            <div class="column  ">
                <div class="acura inner">
                    3/4
                </div>
            </div>
        </section>





        <!-- "row" -->
        <section class="align-center">

            <div class="column">
                <p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>

            </div>

            <div class="column">
                <p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
            </div>

            <div class="column">
                <p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
            </div>
            <div class="column">
                <p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
            </div>



        </section>
        <!-- "row" -->


        <section>
            <div class="column">
                <a href="#" class="btn bmw alert">Test Button</a>
            </div>
            <div class="column">
                <a href="#" class="btn bmw">Test Button</a>
            </div>
            <div class="column">
                <a href="#" class="btn chevy">Test Button</a>
            </div>
            <div class="column">
                <a href="#" class="btn black">Test Button</a>
            </div>
            <div class="column">
                <a href="#" class="btn black">Test Button</a>
            </div>

        </section>


        <section>
            <div class="column">
                <div class="inner acura">
                    <p>Column</p>
                </div>
            </div>
            <div class="column">
                <div class="inner buick">
                    <p>Column</p>
                </div>
            </div>
            <div class="column">
                <div class="inner buick">
                    <p>Column</p>
                </div>
            </div>
            <div class="column">
                <div class="inner toyota">
                    <p>Column</p>
                </div>
            </div>
            <div class="column">
                <div class="inner subaru">
                    <p>Column</p>
                </div>
            </div>

        </section>






        <!--<section>
            <div class="column dev">
                <form>

                    <section>
                        <div class="column">
                            <label for="first">First Name</label>
                            <input type="text" name="first" id="first" required placeholder="First Name">
                        </div>

                        <div class="column">
                            <label for="last">Last Name</label>
                            <input type="text" name="last" id="last" required placeholder="Last Name">
                        </div>
                    </section>

                    <section>
                        <div class="column">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" required placeholder="Email Address">
                            <input type="hidden" name="emailhoney" id="emailhoney" placeholder="Email Address">
                        </div>
                        <div class="column">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" required placeholder="XXX-XXX-XXXX">
                        </div>
                    </section>

                    <section>
                        <div class="column">
                            <label for="contact">Select Box</label>
                            <select name="contact" id="contact">
                                <option value="Options">Options</option>
                                <option value="Options">Options</option>
                                <option value="Options">Options</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div class="column">
                            <label for="comments">Comments</label>
                            <textarea type="text" name="comments" id="comments" placeholder="Comments"></textarea>
                        </div>
                    </section>

                    <section>

                        <div class="column">
                            <button type="submit" id="submit" name="submit" class="btn acura">Submit</button>
                        </div>

                    </section>
                </form>

            </div>
        </section>-->




    </div>
    <!-- containter -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>-->



</body>
<script type="text/javascript">




</script>

</html>