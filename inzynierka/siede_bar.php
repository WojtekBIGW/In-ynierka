<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
        <button type="button" class="btn-close text-bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-center">
        <div class="dropdown mt-2 mb-4">
            <div class="card-body text-center">
                <img src="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/pics/user.png" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;" />
                <h5 class="my-3">Wojtek Jankowski</h5>
                <div class="d-flex justify-content-center mb-2">
                </div>
            </div>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Konto
            </button>
            <ul class="dropdown-menu bg-secondary text-light">
                <li><a class="dropdown-item bg-secondary text-light" href="user_page.php">Twoje konto</a></li>
                <li><a class="dropdown-item bg-secondary text-light" href="#">Wyloguj</a></li>
            </ul>
        </div>
            <a class="nav-link mb-4" href="Index.php">Strona główna</a>
            <a class="nav-link" href="collection_creating.php">Stwórz zbiórkę</a>

            <table class="table table-dark table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">Zbiórki w których uczestniczysz</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="nav-link" href="collection_user.php">Zbiórka dla Piotrka</a></td>
                    </tr>
                    <tr>
                        <td><a class="nav-link" href="collection_user.php">Zbiórka dla Piotrka</a></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Zbiórki które organizujesz</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="nav-link" href="#">Zbiórka dla Madzi</a></td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>