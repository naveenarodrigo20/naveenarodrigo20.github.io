<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Elixar - Home</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resouces/images/logo.png" />
</head>

<body class="body">
    <div class="container-fluid">
        <?php include "header.php" ?>

        <div class="jumbotron jumbotron-fluid mt-4">
            <div class="container justify-content-center">
                <h2 class="text-center title">Welcome to</h2>
                <img src="resouces/images/logo.png" class="d-none d-lg-block mb-2" style="width: 200px; border-radius: 40px; margin-left: 550px;" />
                <h1 class="text-center fw-bold fs-1 title" style="font-size: 30px;">TROPICAL ELIXAR</h1>
                <p class="lead text-center mt-4 fs-4 txt mb-4">We are a leading supplier of organic and ethically sourced coconut products
                    from Sri Lanka.<br /> We offer a wide range of products such as coconut oil, coconut milk, coconut cream,<br />
                    coconut flour, coconut sugar, and more. <br />At Tropical Elixar, we are passionate about bringing you the finest
                    coconut products straight from<br /> the heart of the tropics. Whether you're looking for premium coconut oil,
                    refreshing coconut water, or<br /> delicious coconut-based snacks, we've got you covered.
                </p>
            </div>
        </div>

        <!--carousel-->
        <div class="col-12 d-none d-lg-block mb-5">
            <div class="row">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="resouces/images/background1.webp" class="d-block poster-img1">
                            <div class="carousel-caption d-none d-lg-block poster-caption-1">
                                <h4 class="poster-title-1 text-start title"> TROPICAL<br /> ELIXAR</h4><br />
                                <p class="poster-txt-1 text-start">The Best Place <br /> To Buy <br /> Your Coconut Products...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="resouces/images/background2.jpg" class="d-block poster-img1">
                            <div class="carousel-caption d-none d-lg-block poster-caption-2">
                                <p class="poster-txt-2">The Best Place <br> To Buy <br> Your Coconut Products...</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!--carousel-->

        <div class="container txt">
            <p>
                The coconut, often referred to as the "tree of life," is a versatile and invaluable gift from nature, offering a
                plethora of benefits that extend beyond its culinary uses. This tropical drupe, derived from the coconut palm
                (Cocos nucifera), boasts a bounty of resources, from its nourishing fruit to the fibrous husk and even the sturdy trunk.
            </p>
            <P>
                The coconut, with its myriad benefits and applications, presents a wealth of opportunities for those looking to
                venture into coconut-related businesses. Establishing a coconut products factory not only aligns with the growing
                demand for natural and sustainable products but also contributes to economic development and environmental stewardship.
                The journey from the tropical palms to the market is not just a business endeavor; it's a holistic commitment to
                harnessing the true potential of nature's versatile treasure.
            </P>
        </div>

        <?php include "footer.php" ?>

    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>