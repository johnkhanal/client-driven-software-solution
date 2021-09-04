<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/tiger.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/lion1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/zebra.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <div class="carousel-side">
        <div class="card p-4">
            <h3 class="mb-0">Welcome to</h3>
            <h1 class="text-green">Claybrook Zoo</h1>
            <p>A Claybrook Zoo (short for zoological garden; also called an animal park or menagerie) is a facility in which animals are housed within enclosures, cared for, displayed to the public, and in some cases bred.</p>
        </div>
    </div>
</div>

<section class="py-5 home-animals">
    <div class="container">
        <h2 class="text-green">Our Animals</h2>
        <hr class="hr">

        <div class="row">
            <?php foreach ($animals as $animal) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <?php 
                            require '../db/dbConnection.php';
                            $id  = $animal['animal_id'];
                            $images = $pdo->prepare("SELECT * FROM images WHERE animal_id = '$id' lIMIT 1");
                            $images->execute();
                            foreach ($images as $key) {
                                echo '<img src="../images/animals/'.$key['image'].'" class="img-fluid" alt="Animal Image">';
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <h5><?php echo $animal['given_name']; ?></h5>
                            <p class="mb-0"><b>Species: </b><?php echo $animal['species_name']; ?></p>
                            <p class="mb-0"><b>Life Span: </b><?php echo $animal['life_span']; ?></p>
                            <p class="mb-0"><b>Gender: </b><?php echo $animal['gender']; ?></p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <?php echo '<a href="view?aid='.$animal['animal_id'].'" class="btn btn-sm btn-warning">Read More</a>'; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<section class="py-5 bg-green text-white home-extra">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <h1 class="">Get 20% off</h1>
                <h4 class="">on Online Ticket</h4>
                <hr class="hr ml-auto">
                <div class="mt-4">
                    <a href="ticket" class="btn btn-lg btn-warning rounded-pill">Get Tickets Now</a>
                </div>
            </div>

            <?php 
              $animals = $pdo->prepare("SELECT * 
              FROM animalofweek a 
              JOIN images i
              ON a.animal_id = i.animal_id
              JOIN animals an
              ON an.animal_id = a.animal_id");

              $animals->execute();
              $animal = $animals->fetch();
            ?>

            <div class="col-md-6 home-featured text-center">
                <h2 class="">Featured Animal of the week</h2>
                <hr class="hr ml-auto">
                <div class="row mt-4 align-items-center">
                    <div class="col-md-6 text-right">
                        <img src="../images/animals/<?php echo $animal['image']; ?>" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-left">
                            <h4><?php echo $animal['given_name']; ?></h4>
                            <p class="mb-0"><b>Species: </b><?php echo $animal['species_name']; ?></p>
                            <p class="mb-0"><b>Life Span: </b><?php echo $animal['life_span']; ?></p>
                            <p class="mb-0"><b>Gender: </b><?php echo $animal['gender']; ?></p>
                            <p class="mb-0"><b>Date of Birth: </b><?php echo $animal['dob']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light home-sponser">
    <div class="container">
        <h2 class="text-green text-center">Sponsered Animals</h2>
        <hr class="hr ml-auto">
        <div class="row justify-content-center">
            <?php foreach ($sponsered as $sponser) { ?>
                <div class="col-md-4 home-sponsered text-center">
                    <div class="card bg-transparent border-0">
                        <div class="card-body">
                            <?php 
                            require '../db/dbConnection.php';
                            $id  = $sponser['animal_id'];
                            $images = $pdo->prepare("SELECT * FROM images WHERE animal_id = '$id' lIMIT 1");
                            $images->execute();
                            foreach ($images as $key) {
                                echo '<img src="../images/animals/'.$key['image'].'" class="img-fluid rounded-circle" alt="Animal Image">';
                            }
                            ?>
                            <div class="mt-4">
                                <h5><?php echo $sponser['given_name'] ?></h5>
                                <h5>Sponserd by: <b class="text-green text-capitalize"><?php echo $sponser['name']; ?></b></h5>
                                <?php echo '<a href="view?aid='.$sponser['animal_id'].'" class="btn btn-sm btn-warning">View Animal</a>' ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="py-5 home-map">
    <div class="container">
        <h2 class="text-green">Our Location Map</h2>
        <hr class="hr">
        <img src="../images/map.jpg" alt="Site Map" class="img-fluid">
    </div>
</section>