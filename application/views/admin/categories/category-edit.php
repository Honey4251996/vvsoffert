
<div class="admin-content">
  <div class="container">
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="#">Admin</a> <a class="breadcrumb-item" href="<?php echo site_url('admin/categories'); ?>">Categories</a> <span class="breadcrumb-item active">Edit Category</span> </nav>
    
    <div class="box">
    <div class="box-inner"> <?php echo form_open(); ?>
      <div class="box-title">
        <h2>Category Info : <?php echo $CategoryInfo->name; ?></h2>
        <div class="pull-right">
          <label class="form-check-label">
            <button type="submit" class="btn btn-success" name="submit" value="save">Save</button>
            <?php if($CategoryInfo->pid2>0) { ?>
            	<a href="<?php echo site_url('admin/categories?pid='.$CategoryInfo->pid.'&pid2='.$CategoryInfo->pid2); ?>" class="btn btn-info">Back</a>
            <?php } else if($CategoryInfo->pid>0) { ?>
            	<a href="<?php echo site_url('admin/categories?pid='.$CategoryInfo->pid); ?>" class="btn btn-info">Back</a>
            <?php } else { ?>
            <?php } ?>
            <a href="<?php echo site_url('admin/categories'); ?>" class="btn btn-info">Back</a>
          </label>
        </div>
      </div>
      <!-- /.box-title -->
      <?php show_session_message(); ?>      
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo set_value('name',html_entity_decode($CategoryInfo->name)); ?>">
            <?php echo form_error('name') ?> </div>
        </div>
      </div>
      <?php echo form_close(); ?> </div>
    </div>
    <!-- /.box --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.admin-content -->