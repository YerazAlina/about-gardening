<?php

if (isset($_POST['submit'])) {
    $name = $email = $message = "";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "yeraz.alina@gmail.com";
    $subject = "message";
    $body = "";

    $body .= "From: " . $name . "\r\n";
    $body .= "Email: " . $email . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $subject, $body);
    $messageSent = true;
}

?>

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
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Contact us</h1>
                <form name="contact-form" action="contact" method="POST" id="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="3" cols="28" rows="5" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
                </form>
                <div class="response_msg"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <?php require __DIR__ . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>