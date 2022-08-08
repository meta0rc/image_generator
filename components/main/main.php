<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/pages/admin/components/header/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/connect.php');
?>
<main>
    <?php 

$config = new Connections;

if(isset($_GET['palavras'])){ ?> <h3 class="title-admin">Palavras Cadastradas    </h3>  <?php
    
   
    $quer = 'select *from _palavras';
    
    $datas = $config->render_all($quer); 
    
}else { ?> <h3 class="title-admin">Categorias Cadastradas    </h3><?php
    $que = 'select *from _categorias';
    
    $datas = $config->render_all($que); 
    
}


    foreach($datas as $pagina){ ?>

    <section class="item-content" id="keywords-contents">
        <ul class="keywords-list">
            <li class="flex item-category">
                <img src="<?php echo $pagina['img']; ?>" alt="<?php echo $pagina['h1'];?>" width="300" height="300">

                <div class="content-keyword-list">
                    <h3>
                        <?php echo $pagina['h1']; ?>
                    </h3>
                    <p>
                        <?php echo $pagina['descricao']; ?>
                    </p>
                    <div class="buttons-keywords flex">
                      <?php if(!isset($_GET['palavras'])) { ?> 
                      
                        <a href="<?php echo $row['url'] . 'admin/editar/?page=_categorias&id=' . $pagina['id']?>" class="btn btn-orange">
                            Editar pagina
                        </a>

                        
                      <?php } 

                      else { ?>
                        <a href="<?php echo $row['url'] . 'admin/editar/?page=_palavras&id=' . $pagina['id']?>" class="btn btn-orange">
                        Editar pagina
                    </a>
                     <?php  }


                      ?>  
                        <a href="<?php echo $row['url'] . $pagina['page']?>" class="btn-view">
                            Ver Pagina
                        </a>
                    </div>
                </div>
            </li>

            <?php } ?>

        </ul>
       

    </section>
        