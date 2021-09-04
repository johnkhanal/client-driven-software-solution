<?php error_reporting(0); ?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Claybrook Zoo</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>
    
    <?php if($_SESSION['role'] == 'manager'){?>
        <li class="nav-item">
            <a class="nav-link" href="animals">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Animals</span>
            </a>
        </li>
    <?php }elseif($_SESSION['role'] == 'zookeeper'){ ?>
        <li class="nav-item">
            <a class="nav-link" href="animals">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Animals</span>
            </a>
        </li>
    <?php }else{ ?>
    <li class="nav-item">
        <a class="nav-link" href="animals">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Animals</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="classifications">
            <i class="fas fa-fw fa-stream"></i>
            <span>Classifications</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="category">
            <i class="fas fa-fw fa-th-list"></i>
            <span>Category</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="location">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Location</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="vacancies">
            <i class="fas fa-fw fa-search"></i>
            <span>Vacancy</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="sponsered_animals">
            <i class="fas fa-fw fa-hands-helping"></i>
            <span>Sponsered Animals</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="sponsers">
            <i class="fas fa-fw fa-users"></i>
            <span>Sponsers</span>
        </a>
    </li>

      <li class="nav-item">
        <a class="nav-link" href="add_animalOfWeek">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Animal Of Week</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tickets">
            <i class="fas fa fa-ticket-alt"></i>
            <span>Booked Tickets</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Extra
    </div>

    <li class="nav-item">
        <a class="nav-link" href="viewEvents">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Events</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="archived_animals">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Archived Animals</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="admins">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Admins</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="inbox">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Inbox</span>
        </a>
    </li>

    <?php } ?>
 

    <li class="nav-item">
        <a class="nav-link" href="logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>