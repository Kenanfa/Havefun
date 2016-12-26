<?php include '../Header.php';?>
<link href="../../includes/css/signup.css" rel="stylesheet">

<body>



<div class="col-xs-12 col-sm-8">
    <h1>Buy Tickets For</h1>
    <h1>Cinema,Theater,Music and Sports.</h1>
    <br><br>
</div>

<div class="container">

    <form id="signup">

        <div class="header">

            <h3>Sign Up</h3>

        </div>

        <div class="sep"></div>

        <div class="inputs">
            <input type="text" placeholder="Name" autofocus />
            <input type="text" placeholder="Surname" autofocus />
            <input type="email" placeholder="e-mail" autofocus />
            <input type="text" placeholder="Username" autofocus />
            <input type="password" placeholder="Password" />
            <input type="text" placeholder="Phone Number" autofocus />


            <section title=".roundedTwo">
                <!-- .roundedTwo -->
                <div class="roundedTwo">
                    <input type="checkbox" value="None" id="roundedTwo" name="check" checked  Label text</label>Are You An Admin?
                    <label for="roundedTwo"></label>
                </div>
                <!-- end .roundedTwo -->
            </section>
            <a id="submit" href="#">SIGN UP</a>
        </div>

    </form>

</div>
​

<?php include '../Footer.php';?>
</body>
</html>