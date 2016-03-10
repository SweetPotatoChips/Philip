<!DOCTYPE html>
<html>
    <head>
        <title>makeBooking</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap-3.3.6-dist\cssbootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap-3.3.6-dist\jsbootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
            <?php 
            include "header.php"; 
            ?>
            <form name="starEndLoc">
                <div class="input-group">
                    <h4>Enter your start location:</h4>
                    <input type="text" class="form-control" placeholder="Start Location" >
                    <h4 style="padding-top:60px;">Enter your End location:</h4>
                    <input tpye="text class" class="form-control" placeholder="End Location">
                    <p style="padding-top:35px;"></p>
                    <div align="right">
                        <button type="submit" class="btn btn-primary" align="right">Confirm</button>
                    </div>
                </div>
            </form>
    </body>
</html> 