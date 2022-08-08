
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . '/app';

    include_once($path . '/config/data.php');

 
    include_once('head_admin.php');

    include_once($path . '/config/data.php');
    
    ?>

<body>
<header>

      <?php 

      
      include_once($path . '/components/logo.php') ?>
      
    <nav>
        <div class="links-one">
            <a href="/admin">Retornar ao painel</a>
            <button class="btn-dropdown" id="recurses"> 
                Recursos <i class="fa fa-sort-desc" aria-hidden="true"></i>
            </button>

            <ul class="tools-admin" hidden>
                <li> <a href="#"> Categorias</a> </li>
                <li> <a href="#"> Palavras</a> </li>
            </ul>
        </div>
        <div class="profile-links">
           
            <button class="btn-sair btn">
                Sair
            </button>
          
    
        </div>
    </nav>
</header>
