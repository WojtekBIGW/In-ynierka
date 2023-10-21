<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\bootstrap.css">
        <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\style.css">
        <title>Strona główna</title>
    </head>
    <body style="background-color: #eee;">
        <div id="home"></div>
        <?php require "siede_bar.php";?>
        <?php require "navbar.php";?>

        <div class="class1">
          <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Najlepsza strona do orgaznizacji zbiórek na prezenty</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                        <a class="btn btn-primary btn-xl" href="#info">Sprawdź</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color:#30475E;" id="info">
            <?php require "info.php";?>
        </div>

        <div style="background-color: #F5F5F5;" id="contact">
            <?php require "contact.php";?>
        </div>

        <?php require "footer.php";?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>