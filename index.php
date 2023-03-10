<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="main-div">
        <div class="sub-main-div">
            <nav class="navbar navbar-expand-lg bg-body-tertiary"
                style="background-color: white;padding:  0; margin: 0 28px;">
                <div class="container-fluid" style="background-color: white; ">
                    <a class="navbar-brand" href="#">
                        <img src="spark_logo.png" alt="Logo" width="30" height="24"
                            class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav-bar"
                            style="  background-color: rgb(255, 255, 255);">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users.php">View All Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transfer.php">Transfer Money</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transaction.php">Transaction History</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr>
            <h1 id="heading-spark" style="text-align: center;">The Spark <br> Foundation Bank</h1>
            <div class="body_image">
                <img src="bank_img.png" alt="" id="bank_img">
            </div>
            <div id="services" style="">
                <h2 style="text-align: center; color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">OUR SERVICES</h2>
                <div class="service-item" style="">
                    <img src="customer.png" alt="">
                    <h3>Customers</h3>
                    <p>List of All Customers</p>
                    <a href="users.php"><button class="btn1" href="users.php">View Customers</button></a>
                </div>
                <div class="service-item" style="">
                    <img src="money_transfer.jpg" alt="">
                    <h3>Money Transfer</h3>
                    <p>Transfers money </p>
                    <a href="transfer.php"><button class="btn1">Transfer Money</button></a>
                </div>
                <div class="service-item" style="">
                    <img src="transaction.png" alt="">
                    <h3>Transaction History</h3>
                    <p>List of recent transactions</p>
                    <a href=""><button class="btn1" href="transaction.php">View History</button></a>
                </div>
            </div>
            
        </div>
    </div>
    <script src="index.js"></script>
</body>
<footer id="footer" class="coloured-section">
    <p style="margin-bottom: 3px;">FIND US ON SOCIAL MEDIA</p>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <i class="social-icon fa fa-facebook-square" aria-hidden></i>
    <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
    <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
    <i class="social-icon fa fa-linkedin" aria-hidden="true"></i>
    <p>Address- New Sangam Soc Shop NO 45,46,Andheri (W), Mumbai- 400 053
    <p>
    <p>&copy; The Spark Foundation Banking System. All rights reserved.</p>
</footer>

</html>