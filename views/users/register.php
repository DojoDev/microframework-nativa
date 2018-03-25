<div class="panel panel-default">
  <div class="panel-heading">Cadastrar Usuário</div>
  <div class="panel-body">
   <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
       <div class="form-group">
         <label for="">Nome</label>
         <input type="text" name="name" class="form-control">
       </div>
        <div class="form-group">
         <label for="">E-mail</label>
        <input type="email" name="email" class="form-control"> 
       </div>
       <div class="form-group">
         <label for="">Senha</label>
         <input type="password" name="password" class="form-control">
       </div>
       <div class="form-group">
         <input name="submit" type="submit" value="Cadastrar Usuário" class="btn btn-primary">
         <a href="<?php echo ROOT_URL;?>home" class="btn btn-danger">Cancelar</a>
       </div>
   </form>

  </div>
</div>
