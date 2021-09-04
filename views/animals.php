<section class="py-5 home-animals">
    <div class="container">
        <h2 class="text-green">Our Animals - <?php echo $class['name']; ?></h2>
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