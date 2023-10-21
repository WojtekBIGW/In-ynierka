<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\style.css">
    <title>Profil Użytkownika</title>
</head>

<body style="background-color: #eee;">

    <?php require "navbar.php";?>
    <?php require "siede_bar.php";?>
    <section>
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/pics/user.png" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;" />
                            <h5 class="my-3">Wojtek Jankowski</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-warning">Zmień zdjęcie</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Imię</p>
                                </div>
                                <div class="col-sm-6 d-flex align-items-center">
                                    <p class="text-muted mb-0">Wojtek</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">Zmień</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nazwisko</p>
                                </div>
                                <div class="col-sm-6 d-flex align-items-center">
                                    <p class="text-muted mb-0">Nowak</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <button type="button" class="btn btn-warning">Zmień</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-6 d-flex align-items-center">
                                    <p class="text-muted mb-0">example@example.com</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <button type="button" class="btn btn-warning">Zmień</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Numer telefonu</p>
                                </div>
                                <div class="col-sm-6 d-flex align-items-center">
                                    <p class="text-muted mb-0"></p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <button type="button" class="btn btn-warning">Zmień</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nazwa użytkownika</p>
                                </div>
                                <div class="col-sm-6 d-flex align-items-center">
                                    <p class="text-muted mb-0"></p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <button type="button" class="btn btn-warning">Zmień</button>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4">Zbiórki w których uczestniczysz</p>
                                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="collection_user.php"><p class="mb-1" style="font-size: .77rem;">Prezent dla Piotrka</p></a>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Pralka dla Marcina</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Samochód dla Asi</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"> Zbiórki które organizujesz</p>
                                    <p class="mb-1" style="font-size: .77rem;">Toster dla Bartka</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php require "footer.php";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Zmina imienie</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Nowe imie" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Anuluj</button>
                    <button type="button" class="btn btn-primary">Zmień</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>