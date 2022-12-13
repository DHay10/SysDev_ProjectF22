<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <!-- Container -->
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="/Admin/viewBookings">ZAWSS</a>
        <span class="navbar-text">
            Admin
        </span>
        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION['admin_id'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin/viewBookings">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Admin/viewBookings">View Bookings</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/Admin/viewMessages">Messages</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Admin/addType">Types</a></li>
                        <li><a class="dropdown-item" href="/Admin/addDestination">Destinations</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Admin/logout">Log Out</a>
                </li>

                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin/login">Sign In</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>