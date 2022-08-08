<?php 
    session_start();

    if(!isset($_SESSION['user'])){
        header('location: painel/login/456465a213s64654567231');
    } 
    
    $root =  $_SERVER['SERVER_NAME'];
    $header = $_SERVER['DOCUMENT_ROOT'] . '/app/config/pages/admin/components/header/header.php'; 
    $menu = $_SERVER['DOCUMENT_ROOT'] . '/app/config/pages/admin/components/menu/aside.php'; 
    
    $connect = $_SERVER['DOCUMENT_ROOT'] . '/app/config/connect.php';

    include_once($connect);

    $config = new Connections;

    $categorias = $config->getCategories();
    
?>

<?php include_once($header); ?>

<div class="main-content">
    <h1>
        Categorias
    </h1>
    <ul class="aside">
        <?php foreach($categorias as $index=>$categoria) { ?>
            <li>

                <h3 class="categorias"><?php echo $categoria['_title']; ?></h3>
                <form action="admin/upload" method="post" class="forms" enctype="multipart/form-data">
                    <input type="hidden" name="categoria" value="<?php echo $categoria['_title']; ?>">
                    <input name="files[]" type="file" name="<?php echo $categoria['_title']; ?> " multiple accept="image/*" class="files" id="<?php echo 'categoria-'.$index + 1; ?>" hidden>
  

                    <label for="<?php echo 'categoria-'.$index + 1; ?>">
                        <img src="http://www.localhost/app/config/pages/admin/assets/upload.png" width="30" title="Upload da categoria <?php echo $categoria['_title'];?>" />
                        Selecionar Imagens
                        
                    </label>
                    <span class="text"></span> 
                    <input type="submit" value="Processar" class="btn-proccess button" hidden>
                </form>
            </li>
        <?php } ?> 
    </ul>
</div>

<script src="<?php echo $row['url'] . 'app/config/pages/admin/assets/js/admin.js'?>"></script>

  
</body>



