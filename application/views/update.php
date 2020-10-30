<?php include_once('header.php');?>
    <div class="container">
    	
    <?php echo form_open("welcome/change/{$post->id}", ['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Update Post</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Title</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'title', 'placeholder'=>'Title', 'class'=>'form-control', 'value'=>set_value('title' , $post->title)]);?>
      </div>
      <div class="col-md-5">
      	<?php echo form_error('title', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Description</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control', 'value'=>set_value('description' , $post->description)]);?>
      </div>
      <div class="col-md-5">
      	<?php echo form_error('description', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Name</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'name', 'placeholder'=>'Name', 'class'=>'form-control', 'value'=>set_value('name' , $post->name)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=>set_value('email' , $post->email)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('email', '<div class="text-danger">', '</div>');?>
      </div>
    </div>  

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Country</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'country', 'placeholder'=>'Country', 'class'=>'form-control', 'value'=>set_value('country' , $post->country)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('country', '<div class="text-danger">', '</div>');?>
      </div>
    </div> 

    <div class="form-group">
      <div class="col-md-5 col-md-offset-2">
        <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-default']);?>
        <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']);?>
      </div>
    </div>
  </fieldset>
    <?php echo form_close();?>
    </div>
<?php include_once('footer.php');?>