<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\style.css">
    <title>Zrzuć się</title>
</head>

<body style="background-color: #eee;">
    <?php require "navbar.php";?>
    <?php require "siede_bar.php";?>

    <div class="container text-dark py-5">
        <div class="row">
            <div class="col-sm-4 px-2 text-left">
                <h2 class="mb-4">Prezent dla: Piotrka</h2>
                <h3 class="mb-4">Zebrano: 2100zł z 3000zł</h3>
                <h3>Data Utworzenia zbiórki:</h3>
                <h3 class="mb-4">18.10.2023</h3>
                <h3>Data zakończenia:</h3>
                <h3 class="mb-4">27.10.2023</h3>
                <h4 class="mb-4">Kwota zrzutki: 200zł</h4>
            </div>
            <div class="col-sm-7 px-5 text-center text-white">
                <div class="bg-dark border border-dark p-3 rounded-3 my-4 shadow-lg">
                    <h3 class="mb-4">Organizatorem zbiórki jest Marcin</h3>
                    <h4 class="mb-4">Zrzuć się!</h4>
                </div>
            </div>
        </div>
    </div>

    <?php require "footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>