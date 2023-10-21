<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\bootstrap-5.3.2-dist\css\style.css">
</head>

<body style="background-color: #eee;">
    <?php require "navbar.php";?>
    <?php require "siede_bar.php";?>

    <section class="mb-5 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card bg-dark text-white shadow-lg" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5"><label class="form-label" for="title">Załóż
                                    zbiórkę</label></h2>
                            <form>

                                <div class="row">
                                    <div class="mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="title">Tytuł zbiórki</label>
                                            <input type="text" id="title" class="form-control form-control-lg"
                                                placeholder="Tytuł" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label class="form-label" for="description">Opis zbiórki</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="description" required></textarea>
                                                <label for="description">Opis zbiórki</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="item">Przedmiot</label>
                                            <input type="text" id="item" placeholder="Przedmiot"
                                                class="form-control form-control-lg" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label class="form-label" for="price">Cena</label>
                                        <div class="input-group">
                                            <input type="number" id="price" min="1" class="form-control form-control-lg"
                                                placeholder="Cena" required />
                                            <span class="input-group-text">zł</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="eventdate">Data wydarzenia</label>
                                            <input type="date" id="eventdate" placeholder="Data wydarzenia"
                                                class="form-control form-control-lg" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="dateend">Data zakończenia zbiórki</label>
                                            <input type="date" id="dateend" placeholder="Data zakończenia zbiórki"
                                                class="form-control form-control-lg" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label class="form-label" for="pic">Dodaj zdjęcie</label>
                                        <input type="file" id="pic" placeholder="Zdjęcie"
                                            class="form-control form-control-lg" required />
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        required />
                                    <label class="form-check-label" for="flexCheckDefault">Akceptuje <a
                                            href="">regulamin</a></label>
                                </div>


                                <div class="mt-4 pt-2 align-items-center text-center">
                                    <a href="collection_user.php">
                                        <button class="btn btn-outline-light btn-lg px-5">Załóż</button>
                                    </a>
                                </div>

                            </form>
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
</body>

</html>