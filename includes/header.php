<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand"><b>Tour of Britian</b></a>
        <ul class="nav navbar-nav">
            <li <?php if ($a=="home"){echo "class='active'";}?> ><a href="index.php">Home</a></li>
            <li <?php if ($a=="booking"){echo "class='active'";}?>><a href="makeBooking.php">Make Booking</a></li>
            <li <?php if ($a=="search"){echo "class='active'";}?>><a href="journeySearch.php">Journey Search</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li <?php if ($a=="login"){echo "class='active'";}?>><a href="login.php">Login</a></li>
            <li <?php if ($a=="register"){echo "class='active'";}?>><a href="register.php">Register</a></li>
        </ul>
    </div>
</nav>
