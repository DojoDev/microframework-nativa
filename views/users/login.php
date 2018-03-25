<div class="panel panel-default">
  <div class="panel-heading">Login</div>
  <div class="panel-body">
   <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
         <label for="">E-mail</label>
        <input type="email" name="email" class="form-control"> 
       </div>
       <div class="form-group">
         <label for="">Senha</label>
         <input type="password" name="link" class="form-control">
       </div>
       <div class="form-group">
         <input name="submit" type="submit" value="Entrar" class="btn btn-success btn-block">
       </div>
   </form>

  </div>
</div>
