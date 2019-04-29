<style>
  #ok,#no{
    display: none;
  }
</style>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

<div class="alert alert-success" id="ok" role="alert">
  Category Added
</div>
<div class="alert alert-danger" id="no" role="alert">
 Errorrrrrrr
</div>


<form class="form-horizontal" id="formCat">
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control" id="name" placeholder="name">
                  </div>.
                  
                </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="status" id="isok">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                   
                  </select>
                </div>
                </div>
            
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="button" id="addCat" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div> 
          <!-- /.box -->
        
          <!-- /.box -->
        </div>

    </section>
    