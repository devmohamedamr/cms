<?php

require "../lib/category.php";


if(isset($_POST['category'])){
    $category = new category;
    $category->addnewcategory(
        ["name" => $_POST['category']]
    );
}








include "header.php"; 


?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        <form action="addcategory.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category name</label>
                    <input type="text" name="category" class="form-control" id="exampleInputEmail1" placeholder="Enter Category name">
                  </div>
            
         
        
                </div>
                <!-- /.card-body -->

                <div class="card-body">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
              </form>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    <?php include "footer.php"; ?>
