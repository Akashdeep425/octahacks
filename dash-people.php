<!DOCTYPE html>
<html lang="en">
<?php session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-3" style="width:18rem;">
                <a href="people-profile.php" style="text-decoration: none;color: black">
                    <div class="card cd">
                        <img src="pics/img_avatar.png" class="card-img-top" alt="...">
                        <center>
                            <div class="card-body">
                                <h4><b>Profile Form</b></h4>
                                <p>Save or Update Profile</p>
                            </div>
                        </center>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 pb-3" style="width:18rem;">
                <a href="ngos-view.php" style="text-decoration: none;color: black">
                    <div class="card cd">
                        <img src="pics/img_avatar.png" class="card-img-top" alt="...">
                        <center>
                            <div class="card-body">
                                <h4><b>Ngos List</b></h4>
                                <p>View All NGOs</p>
                            </div>
                        </center>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 pb-3" style="width:18rem;">
                <a href="paypage.php" style="text-decoration: none;color: black">
                    <div class="card cd">
                        <img src="pics/img_avatar.png" class="card-img-top" alt="...">
                        <center>
                            <div class="card-body">
                                <h4><b>Donate</b></h4>
                                <p>Donate to a ngo</p>
                            </div>
                        </center>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 pb-3" style="width:18rem;">
                <a href="logout.php" style="text-decoration: none;color: black">
                    <div class="card cd">
                        <img src="pics/img_avatar.png" class="card-img-top" alt="...">
                        <center>
                            <div class="card-body">
                                <h4><b>Logout</b></h4>
                                <p></p>
                            </div>
                        </center>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>