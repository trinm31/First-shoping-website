<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online Here</title>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- custom css-->
    <link rel="stylesheet" href="css/maincss.css">
    <!-- Font awesome -->
    <script defer src="js/all.js"></script>
    <script defer src="js/fontawesome.js"></script>
</head>
<body>
    <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-md-6 my-1 align-self-center">
                    <div class="embed-responsive embed-responsive-21by9 height-60">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61349.64667009151!2d108.17168646008001!3d16.04716590690455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0xfc14e3a044436487!2zxJDDoCBO4bq1bmcsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1586674975783!5m2!1svi!2s"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-6 my-3 align-self-center">
                    <div class="card text-center">
                        <div class="card-header ">
                            <h1 class="text-uppercase">Order Infor</h1>
                        </div>
                        <div class="card-body">
                            <form action="ordervalidation.php" method="post">
                                <!-- input group -->
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input-text">
                                            <i class="fas fa-user"></i> 
                                        </span>
                                    </div>
                                    <input type="text" name="name" class="form-control form-control-lg" required placeholder="Enter your name here">
                                </div>
                                <!-- input group -->
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input-phone">
                                            <i class="fas fa-phone"></i> 
                                        </span>
                                    </div>
                                    <input type="tel" name="phone" class="form-control form-control-lg" required placeholder="Enter your phone name">
                                </div>
                                <!-- input group -->
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input-address">
                                        <i class="fas fa-map"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="address" class="form-control form-control-lg" required placeholder="Enter your address here">
                                </div>
                                <!-- input group -->
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input-note">
                                        <i class="fas fa-sticky-note"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="note" class="form-control form-control-lg" required placeholder="Enter your note for saler here">
                                </div>
                                <!-- input group -->
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input-order">
                                        <i class="fas fa-cookie"></i> 
                                        </span>
                                    </div>
                                    <input type="text" name="orders" class="form-control form-control-lg" required placeholder="Enter your order follow the structure 'name-of-cookie(quantity)' ">
                                </div>
                                <button type="submit" class="btn btn-block bnt-lg text-uppercase contact-btn">
                                    <i class="far fa-hand-point-right"></i>Send order
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>