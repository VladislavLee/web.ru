<?php
require 'header.php';
?>
<div class="container">
    <div class="account">
        <h2>Account</h2>
        <div class="account-pass">
            <div class="col-md-7 account-top">
                <form>

                    <div>
                        <span>Email</span>
                        <input type="text">
                    </div>
                    <div>
                        <span >Password</span>
                        <input type="password">
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="col-md-5 left-account ">
                <a href="single.php"><img class="img-responsive " src="../images/ac.png" alt=""></a>
                <div class="five">
                    <h1>25% </h1><span>discount</span>
                </div>
                <a href="register.php" class="create">Create an account</a>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<?php
    require 'footer.php';
?>