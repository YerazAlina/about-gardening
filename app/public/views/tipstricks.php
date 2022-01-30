<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gardening, about gadening">
    <meta name="author" content="Yeraz Ayana">
    <meta name="keywords" content="about gardening, gardening, plants, seeds">
    <title>AboutGardening</title>
    <link rel="icon" href="../img/" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">

</head>

<body>
    <?php require __DIR__ . '/navbar.php'; ?>

    <div class="container py-5">
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Tips &amp; Tricks</h1>
        </header>

        <!-- First Row -->
        <h2 class="font-weight-bold mb-2">Our handpicked Tips &amp; Tricks</h2>
        <p class="font-italic text-muted mb-4">Wondering how to start a garden? Find your confidence with these expert gardening tips.</p>

        <div class="row">

            <div class="col">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body"><img src="../img/tools.png" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="article1" class="text-dark">Which tools do you need?</a></h5>
                        <p class="small text-muted font-italic">Tools are essential when your gardening. They can help you</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body"><img src="../img/seeds.png" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="article2" class="text-dark">Where do I buy my seeds?</a></h5>
                        <p class="small text-muted font-italic">Seeds can be found everywhere but do you actually need to buy them?</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body"><img src="../img/herbs.png" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="article3" class="text-dark">Unlimited herbs for your kitchen? How?</a></h5>
                        <p class="small text-muted font-italic">Cooking with fresh herbs can be quite pricy BUT not if you</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body"><img src="../img/soil.png" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="article4" class="text-dark">Picking the right soil. Where do I start?</a></h5>
                        <p class="small text-muted font-italic">Soil is very important when it comes to gardening. But how do</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>
</body>

</html>