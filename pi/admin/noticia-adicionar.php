<!DOCTYPE html>
<html lang="en">
   <head>
      <?php

      include 'include/head.php';

      $categorias = require_once('php/categorias/combo.php');

      ?>
   </head>
   <body class="fix-header">
      <div class="preloader">
         <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
         </svg>
      </div>
      <div id="wrapper">
         <nav class="navbar navbar-default navbar-static-top m-b-0">
            <?php include 'include/header.php'; ?>
         </nav>
         <div class="navbar-default sidebar" role="navigation">
            <?php include 'include/menu-lateral.php'; ?>
         </div>
         <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">Notícias</h4>
                  </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     <ol class="breadcrumb">
                        <li><a href="index.php">Início</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                     </ol>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-xs-12">
                     <div class="white-box">
                        <h3 class="box-title">Nova Notícia</h3>
                        <hr>
                        <form class="form-horizontal form-material" action="php/noticias/adicionar.php" method="post" enctype="multipart/form-data"
                        >
                           <div class="form-group">
                              <label class="col-md-12">Categoria</label>
                              <div class="col-md-12">
                                 <select name="categoria_id" class="form-control form-control-line" required>
                                    <option value="">Selecione</option>
                                    <?php foreach ($categorias as $categoria) { ?>
                                    <option value="<?= $categoria->categoria_id ?>"><?= $categoria->descricao ?></option>  
                                    <?php } ?>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-12">Título</label>
                              <div class="col-md-12">
                                 <input type="text" name="titulo" placeholder="Informe um título" class="form-control form-control-line" required> 
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-12">Data</label>
                              <div class="col-md-12">
                                 <input type="text" name="data" placeholder="Informe uma data" class="form-control form-control-line data" required> 
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-12">Texto</label>
                              <div class="col-md-12">
                                 <textarea name="texto" class="form-control form-control-line" placeholder="Informe um texto para a notícia" ></textarea>
                                 <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc'></script>
                                 <script  src="js/index.js"></script>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-12">Imagem</label>
                              <div class="col-md-12">
                                 <input type="file" name="imagem" accept="image/*"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-12">
                                 <button type="submit" class="btn btn-success">SALVAR</button>
                                 <a href="noticias.php" class="btn btn-alert">CANCELAR</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <?php include 'include/footer.php'; ?>
         </div>
      </div>
      <script text="text/javascript">
         $(document).ready(function(){
            $('.data').mask('00/00/0000');
         });
      </script>
   </body>
</html>
