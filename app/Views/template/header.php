<div>
    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example m-0 border-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <img src="../assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" href="?p=user.users.index&category_id=1">Entrées</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="?p=user.users.index&category_id=2">Menu</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="?p=user.users.index&category_id=3">Desserts</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active"  href="?p=user.users.index&category_id=4">Amuse bouche</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active"  href="?p=user.users.index&category_id=5">Boissons</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" method="post" action="?user.users.index&category_id=<?=$_GET['category_id']?>">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>