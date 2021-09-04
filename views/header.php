<nav class="navbar navbar-expand-lg navbar-dark bg-green">
    <a class="navbar-brand pl-5" href="#">
        <img class="logo" src="../images/logo.jpg" alt="Claybrook Zoo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Animals</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php 
                        require '../db/dbConnection.php';

                        $classData = new modelZoo($pdo, 'classifications');
                        $classifications = $classData->findAll();

                        foreach ($classifications as $class) {
                            echo '<a class="dropdown-item" href="animals?cid='.$class['class_id'].'">'.$class['name'].'</a>';
                        }
                    ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vacancy">Vacancy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
            </li>
            <?php if (isset($_SESSION['user_id'])) {
                echo '<li class="nav-item"> <a class="nav-link" href="ticket">Buy Tickets</a></li>';
                echo '<li class="nav-item"> <a class="nav-link" href="profile">My Profile</a></li>';
                echo '<li class="pl-3"><a class="btn btn-sm btn-warning rounded-pill px-3" href="logout">Logout</a></li>';
            }
            else if(isset($_SESSION['visitor_id'])){
                echo '<li class="nav-item"> <a class="nav-link" href="ticket">Buy Tickets</a></li>';
                echo '<li class="pl-3"><a class="btn btn-sm btn-warning rounded-pill px-3" href="visitorLogout">Logout</a></li>';
            }
             else {
                echo '<li class="pl-3"><a class="btn btn-sm btn-warning rounded-pill px-3" href="login">Login as a sponsor</a></li>';
                echo '<li class="pl-3"><a class="btn btn-sm btn-warning rounded-pill px-3" href="visitorLogin">Login as a visitor</a></li>';
            } ?>
        </li>
    </ul>
</div>
</nav>