<!DOCTYPE html>
<html>
    <head>
        <title>makeBooking</title>
        <?php
        include "bootstrap.php";
        ?>
    </head>
    <body>
        <div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
            <?php 
            include "header.php"; 
            ?>
            <form name="starEndLoc">
                <div class="input-group">
                    <p>Enter your start location:</p>
                    <input type="text" class="form-control" placeholder="Start Location" >
                    <p style="padding-top:60px;">Enter your End location:</p>
                    <input tpye="text class" class="form-control" placeholder="End Location">
                    <p style="padding-top:35px;"></p>
                    <div align="right">
                        <button type="submit" class="btn btn-primary" align="right">Confirm</button>
                    </div>
                </div>
            </form>
    </body>
</html> 