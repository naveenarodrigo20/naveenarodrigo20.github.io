<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Elixar - Blog</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resouces/images/logo.png" />
</head>

<body class="body">
    <div class="container-fluid">
        <div class="row"></div>
        <?php include "header.php" ?>

        <div class="container txt mb-2">
            <h2 class="text-decoration-underline fw-bold title mb-3 mt-3">Our Blog</h2>
            <p>Welcome to our blog, a digital space where knowledge meets inspiration, where we share useful and engaging content
                related to coconut products, such as tips, news, stories, or tutorials. You can also use our blog to educate yourself,
                build trust, and drive traffic to our website. We hope you enjoy reading our posts and leave your comments and feedback.
                Happy reading!
            </p>
            <!-- Blog posts -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 border-3 border-success" style="border-radius: 25px; background-color: rgb(192, 208, 167);">
                        <img src="resouces/images/project1.jpeg" class="card-img-top mt-3 mx-auto" style="width: 450px;" alt="Blog post 1">
                        <div class="card-body">
                            <h4 class="card-title title text-decoration-underline">Our Model Project</h4>
                            <p class="card-text">A model project for a factory is a visionary initiative that optimizes operations,
                                enhances efficiency, and sets high standards for sustainability. By implementing innovative
                                technologies and best practices, it serves as a blueprint for success. Advantages include increased
                                productivity, cost savings, reduced environmental impact, and improved employee morale, positioning
                                the factory as a leader in the industry.
                            </p>
                            <div class="col-4">
                                <a href="model.php" class="btn btn-success form-control fs-6">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 border-3 border-success" style="border-radius: 25px; background-color: rgb(192, 208, 167);">
                        <img src="resouces/images/workshop2.png" class="card-img-top mt-3 mx-auto" style="width: 500px; height: 335px;" alt="Blog post 1">
                        <div class="card-body">
                            <h4 class="card-title title text-decoration-underline">Our Workshops</h4>
                            <p class="card-text">Workshops are dynamic learning environments that facilitate hands-on experience,
                                collaboration, and skill enhancement. Participants actively engage in practical tasks, fostering
                                deeper understanding and skill development. This interactive format encourages networking,
                                problem-solving, and knowledge transfer, making workshops an invaluable platform for holistic
                                learning and professional growth.
                            </p>
                            <div class="col-4">
                                <a href="article2.php" class="btn btn-success form-control fs-6">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 border-3 border-success" style="border-radius: 25px; background-color: rgb(192, 208, 167);">
                        <img src="resouces/images/water6.png" class="card-img-top mt-3 mx-auto" style="width: 450px;" alt="Blog post 1">
                        <div class="card-body">
                            <h4 class="card-title title text-decoration-underline">Benefits of Coconut Water</h4>
                            <p class="card-text">Coconut water, nature's hydrating elixir, boasts numerous benefits. Packed with
                                electrolytes, it replenishes fluids, aids digestion, and supports cardiovascular health. Rich in
                                potassium and antioxidants, it promotes radiant skin and boosts immunity. Low in calories, it's a
                                delicious, natural alternative for optimal hydration and overall well-being.
                            </p>
                            <div class="col-4">
                                <a href="article1.php" class="btn btn-success form-control fs-6">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php" ?>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>