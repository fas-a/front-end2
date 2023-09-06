<nav class="navbar navbar-expand-lg navbar-light bg-nav shadow-sm">
        <div class="container-fluid ms-4">
            <a class="navbar-brand" href="#">
                <img src="/assets/icon.png" width="35" height="35" class="d-inline-block align-top" alt="Logo Tekno">
                <span class="m-2 fs-4 fw-bold" style="">Tekno</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fw-bold" id="navbarNavAltMarkup">
                @if (request()->is('/'))
                <div class="navbar-nav fs-7">
                    <a class="nav-item nav-link active" href="#">Category #1</a>
                    <a class="nav-item nav-link" href="#">Category #2</a>
                    <a class="nav-item nav-link" href="#">Category #3</a>
                    <a class="nav-item nav-link" href="#">Category #4</a>
                    <a class="nav-item nav-link" href="#">Category #5</a>
                    <a class="nav-item nav-link" href="#">Category #6</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="" class="btn btn-secondary me-4 fw-bold" type="button">Sign in</a>
                </div>
                @elseif(request()->is('dashboard'))
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Profile</a>
                    <a class="nav-item nav-link" href="#">Manage Post</a>
                </div>
                <div class="navbar-nav ms-auto me-4">
                    <u>Admin</u>
                </div>
            </div>
                @endif
        </div>
    </nav>