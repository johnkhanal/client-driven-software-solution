<section class="py-5">
	<div class="container">
		<h1 class="text-green">Events</h1>
		<hr class="hr">
        <div class="row">
        <?php foreach($tickets as $data){?>
            
			<div class="col-md-6 col-sm-10 my-2">
				<p class="text-justify"><b>Event Name: </b><span class="text-green-lite"> <?php echo $data['eventName']; ?></span></p>
                <p class="text-justify"><b> Description: </b><span class="text-green-lite"> <?php echo $data['description']; ?></span></p>
                <p class="text-justify"><b>Event Date: </b><span class="text-green-lite"> <?php echo $data['eventDate']; ?></span></p>
                <p class="text-justify"><b>No of Days: </b><span class="text-green-lite"> <?php echo $data['noOfDays']; ?></span></p>
			</div>
            
			<div class="col-md-6 col-sm-10 my-2">
				<img src="../images/events/<?php echo $data['imageName'];?>" width="150px" height="100px" class="img-fluid">
			</div>
		
        <?php } ?>
        </div>
	</div>
</section>