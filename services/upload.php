<?php 

    include_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/connect.php');
   
    uploadFiles();
    generator_images_big();
    move_categories_and_del();

    function uploadFiles() {
        $categoria = $_POST['categoria'];
        $con = new Connections; 
        $images = $con->render_all("select _img FROM _palavras_plan where _categoria='$categoria'");
        $path = $_SERVER['DOCUMENT_ROOT'] . '/app/config/pages/admin/services/uploads/';
        $files = $_FILES['files'];
        $names = $files['name'];
        $tmp = $files['tmp_name'];

        foreach($names as $key => $name) {
            $file = $path . $images[$key]['_img'];
            if(file_exists($file)){
                unlink($file);
                move_uploaded_file($tmp[$key], $file);
            }
            else {
                move_uploaded_file($tmp[$key], $file);
            }
        }
    }

    function generator_images_big(){
        $categoria = $_POST['categoria'];
        $con = new Connections;
        $path = $_SERVER['DOCUMENT_ROOT'] . '/app/config/pages/admin/services/uploads/';
        $rootPath = $_SERVER['DOCUMENT_ROOT'] . '/app/assets/thumbs/';
        $imagesbig = $con->render_all("select _img FROM _big where _categoria='$categoria'");
        $dir = scandir(__DIR__ . '/uploads');
        $length = count($dir);

        foreach($imagesbig as $key => $image) {
            $num = rand(2, $length - 1); 
            $img = $path . $dir[$num];
            $imageBD = $rootPath . $image['_img'];
            copy($img, $imageBD);
        }
    }
    function move_categories_and_del() {
        $dir = scandir(__DIR__ . '/uploads');
        $path = $_SERVER['DOCUMENT_ROOT'] . '/app/config/pages/admin/services/uploads/';
        $rootPath = $_SERVER['DOCUMENT_ROOT'] . '/app/assets/thumbs/';
        foreach($dir as $images) {
            if(is_file($path . $images)){
                rename($path . $images, $rootPath . $images);
            }
                
        }
        header('location: /admin');
    }


    // echo  "<script>alert('Imagens enviadas com Sucesso!');</script>";
    
?>