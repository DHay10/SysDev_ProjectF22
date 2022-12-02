<nav class="navbar sticky-top navbar-dark navbar-expand-lg bg-dark">
    <!-- Container -->
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="/Main/index">ZAWSS</a>
        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="/Main/index">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/User/booking">Book</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Main/aboutUs">About Us</a></li>
                        <li><a class="dropdown-item" href="/Main/faq">FAQ</a></li>
                        <li><a class="dropdown-item" href="/Main/contactUs">Contact Us</a></li>
                    </ul>
                </li>

                <?php if(isset($_SESSION['username'])) { ?>
                    
                <li class="nav-item">
                    <a class="nav-link" href="/User/profile">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/User/logout">Log Out</a>
                </li>

                <?php } else { ?>

                <li class="nav-item">
                    <a class="nav-link" href="/User/login">Sign In</a>
                </li>

                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
