<?php include_once('header.php');?>
    <div class="container">
    	<h3>View Post</h3>
    	<h4><?php echo $post->title;?></h4>
    	<h6>Description:</h6>
    	<p><?php echo $post->description;?></p>
    	<h6>Name:</h6>    	
    	<p><?php echo $post->name;?></p>
    	<h6>Email:</h6>
    	<p><?php echo $post->email;?></p>
        <h6>Country:</h6>
        <p><?php echo $post->country;?></p>
    	<h6>Date:</h6>
    	<p><?php echo $post->date_created;?></p>
    	<?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']);?>

    </div>
<?php include_once('footer.php');?>    
    	