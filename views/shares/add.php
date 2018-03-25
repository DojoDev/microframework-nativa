<div class="panel panel-default">
  <div class="panel-heading">Shared Something</div>
  <div class="panel-body">
   <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
       <div class="form-group">
         <label for="">Title</label>
         <input type="text" name="title" class="form-control">
       </div>
        <div class="form-group">
         <label for="">Body</label>
         <textarea name="body" class="form-control"></textarea> 
       </div>
       <div class="form-group">
         <label for="">Link</label>
         <input type="text" name="link" class="form-control">
       </div>
       <div class="form-group">
         <input name="submit" type="submit" value="Compartilhar Link" class="btn btn-primary">
         <a href="<?php echo ROOT_URL;?>shares" class="btn btn-danger">Cancelar</a>
       </div>
   </form>

  </div>
</div>
