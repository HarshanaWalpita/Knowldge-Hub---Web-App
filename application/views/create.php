<?php include_once('header.php');?>
    <div class="container">
    	
    <?php echo form_open('welcome/save', ['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Add Post</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Title</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'title', 'placeholder'=>'Title', 'class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
      	<?php echo form_error('title', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Description</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
      	<?php echo form_error('description', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Name</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'name', 'placeholder'=>'Name', 'class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'email', 'placeholder'=>'Email', 'class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('email', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Country</label>
      <div class="col-md-5">        
        <?php echo form_input(['name'=>'country', 'placeholder'=>'Country', 'class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('country', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-5 col-md-offset-2">
        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
        <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']);?>
      </div>
    </div>
  </fieldset>
    <?php echo form_close();?>
    </div>
<?php include_once('footer.php');?>