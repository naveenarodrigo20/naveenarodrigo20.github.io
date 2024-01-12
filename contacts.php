<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Elixar - Contact</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resouces/images/logo.png" />
</head>

<body class="body">
    <div class="container-fluid">
        <div class="row"></div>
        <?php include "header.php" ?>

        <div class="container txt">
            <h1 class="text-decoration-underline fw-bold title mb-3 mt-3">Contact Us</h1>
            <p>We would love to hear from you. Whether you have a question about our products, need assistance with your order,
                or want to give us feedback, you can contact us using any of the methods below.
            </p>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-decoration-underline fw-bold title mb-3 mt-3">Contact Information</h3>
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-envelope"></i><label>Email :</label> <a href="mailto:info@coconut.com"> tropicalelixar@gmail.com</a></li>
                        <li><i class="fa fa-phone"></i><label>Telephone :</label> +94 75 923 1888</li>
                        <li><i class="fa fa-map-marker"></i><label>Address :</label> No. 222/15, Tropical Elixar Pvt(Ltd),<br /> Gajaba Road, Kurunegala, Sri Lanka</li>
                        <br />
                        <label class="form-label text-decoration-underline fs-5">Social Media</label>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-dark">
                                    <i class="bi bi-facebook" style="font-size: 22px;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-dark">
                                    <i class="bi bi-whatsapp" style="font-size: 22px;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-dark">
                                    <i class="bi bi-instagram" style="font-size: 22px;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-dark">
                                    <i class="bi bi-youtube" style="font-size: 22px;"></i>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="text-decoration-underline fw-bold title mb-3 mt-3">Contact Form</h3>
                    <form id="contactForm" method="post" action="mail.php">
                        <div class="form-group mb-2">
                            <label for="name">Your name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Your email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject of your message" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Your message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3" id="sendButton">Send</button>
                        <div id="status"></div>
                    </form>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>