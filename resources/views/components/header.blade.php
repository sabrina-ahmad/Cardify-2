<header class="bg-light-blue">
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light-blue bg-gradient shadow">
        <div class="container">
            <a class="navbar-brand" href="/">Cardify Health Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div
                    class="w-100 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="/">Home</a>
                        <a class="nav-link" href="/service">Service</a>
                        <a class="nav-link" href="/contact">Contact Us</a>
                        <a class="nav-link" href="/about">About Us</a>
                    </div>
                    <div class="navbar-nav gap-1 mt-2 mt-sm-0">
                        <a href="/register" class="btn btn-success">Register</a>
                        <a href="/login" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light-blue">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action>
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" placeholder="username">
                        <label for="username" class="form-label">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
