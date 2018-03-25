<section class="container text-center header-blog">
            <h1>Blog</h1>
            <p>Criar, compartilhar, aprender e ensinar com conteúdo objetivo e aplicável no seu dia-a-dia.</p>
          </section>
          <hr>
<div class="container">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
  
          <div class="row">
          <?php if($viewmodel){?>
  <?php foreach ($viewmodel as $item) {?>
            <div class="col-xs-8 col-lg-6">
            <img class="img-responsive" src="<?php echo ROOT_URL.'assets/img/'.$item['image']; ?>" title="" alt=""/>
              <h2><?php echo $item['title']; ?></h2>
              <p><?php echo $item['body']; ?></p>
              <p><a class="btn btn-default" href="#" role="button">Saiba Mais »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <?php  } ?> 
            <?php
            }else{
              echo "nenhum post";
              } ?>
        
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
        <a href="#">Ebook gratuito</a>
        <a href="http://lp.digitalnativa.com.br/estrategias-da-era-digital-ebook/?utm_source=blog&utm_medium=cta-sidebar&utm_campaign=estrategias-era-digital" target="_blanck"><img src="<?php echo ROOT_URL?>assets/img/ebook-banner.jpg"></a>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Raffael Nunes 2018.</p>
      </footer>

    </div>