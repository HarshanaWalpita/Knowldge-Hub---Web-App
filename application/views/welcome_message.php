<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include_once('header.php');?>
    <div class="container">
    	<h3>View All Blog Posts</h3>
    	<?php if($msg=$this->session->flashdata('msg')):?>
    		<?php echo $msg; ?>

    	<?php endif;?>
    	<?php echo anchor('welcome/create', 'Add Post', ['class'=>'btn btn-primary']);?>
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Creator's Name</th>
      <th>Creator's Email</th>
      <th>Country</th>
      <th>Created Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php if(count($posts)):?>
  		<?php foreach($posts as $post):?>
    <tr>
      <td><?php echo $post->title;?></td>
      <td><?php echo $post->description;?></td>
      <td><?php echo $post->name;?></td>
      <td><?php echo $post->email;?></td>
      <td><?php echo $post->country;?></td>
      <td><?php echo $post->date_created;?></td>
      <td>
      	<?php echo anchor("welcome/view/{$post->id}", 'View', ['class'=>'label label-warning']);?>
      	<?php echo anchor("welcome/update/{$post->id}", 'Update', ['class'=>'label label-success']);?>
      	<?php echo anchor("welcome/delete/{$post->id}", 'Delete', ['class'=>'label label-danger']);?>
      	</td>
    </tr>
<?php endforeach;?>
    <?php else: ?>
    	<tr>
    		<td>Sorry! No Records</td>
    	</tr>
    <?php endif;?>   
  </tbody>
</table>
</div>
<?php include_once('footer.php');?>