<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\style.css">
    <title>Zbiórka</title>
</head>

<body style="background-color: #eee;">
    <?php require "navbar.php";?>
    <?php require "siede_bar.php";?>

    <div class="container text-dark py-5">
        <div class="row">
            <div class="col-sm-4 px-2 text-left">
                <h2 class="mb-4">Prezent dla: Piotrka</h2>
                <h3 class="mb-4">Cena: 3000zł</h3>
                <h3>Data zakończenia:</h3>
                <h3 class="mb-4">27.10.2023</h3>
                <h4 class="mb-4">Opis:</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id elit libero. Vivamus eleifend
                    venenatis augue at venenatis. Morbi sit amet sapien sem. Praesent eget tempor nibh. Duis bibendum
                    nibh libero, sed feugiat ante consequat in. Proin id metus sed ipsum faucibus feugiat vitae
                    porttitor erat. Cras augue mauris, malesuada vitae interdum ac, facilisis ac massa. Vestibulum nunc
                    lorem, tempor at pretium ac, euismod eget sapien. Duis placerat, eros id bibendum pulvinar, ligula
                    felis interdum arcu, vitae rhoncus est nulla vitae dui. Curabitur in nunc pulvinar, congue urna in,
                    elementum tortor. Pellentesque nisi lacus, interdum eu turpis ac, sodales vestibulum lorem.
                </p>
            </div>
            <div class="col-sm-4 px-5 text-end float-end">
                <h3 class="mb-4">Po tyle się zrzucamy: 200zł</h3>

                <div class="progress mb-4 shadow-lg">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:30%;">30%</div>
                </div>

                <div>
                        <button class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Przelej</button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Przejdziesz na stronę z płatnościami</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Zamknij</button>
                                    <a href="payment.php">
                                        <button type="button" class="btn btn-primary">Rozumiem idę dalej</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark border border-dark p-3 rounded-3 my-4 shadow-lg">
                    <img class="img-fluid" src="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\pics\pralka1.png">
                </div>

            </div>
            <div class="col-sm-3 px-4">
                <div class="card bg-dark shadow-lg">
                    <h4 class="text-center text-white my-2">Zaproszeni</h4>
                    <b>
                        <ul class="list-group list-group-numbered">
                            <li class="list-group-item list-group-item-action list-group-item-dark">Wojtek</li>
                            <li class="list-group-item list-group-item-action list-group-item-dark">Asia</li>
                            <li class="list-group-item list-group-item-action list-group-item-dark">Basia</li>
                        </ul>
                    </b>
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