
<aside>
    <h2>Serviços</h2>
    <ul>
        <li id="add-categoria"> 
            <i class="fa fa-plus" aria-hidden="true"></i>
            <a href="<?php echo $row['url'] . 'admin/categoria/adicionar'?> "> Criar Pagina de Categoria </a>
        </li>
        <li> 
            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            <a href="#"> Criar Pagina de Palavra-Chave </a></li>
        </li>
        <li>
            <i class="fa fa-eye" aria-hidden="true"></i>
            <a href="<?php echo $row['url'] . 'admin' ?>"> Ver todas Categorias </a></li>
        </li>
        <li>
            <i class="fa fa-info" aria-hidden="true"></i>
            <a href="<?php echo $row['url'] . 'admin/?palavras=true' ?>"> Ver todas Palavras-Chave </a></li>
        </li>
        <li>
            <button href="#" id="show-uploads">Uploads   <i class="fa fa-caret-down" aria-hidden="true" ></i></button>
          

            <ul id="uploads">
                
                    <li>
                        <label for="input_categoria">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        <span> Upload de Categorias </span>
                        </label>

                        <label for="enviar">

                            <i title="salvar" class="fa fa-floppy-o upload-save" aria-hidden="true" id="save-upload-categoria"></i>
                        </label>

                    </li>
             
                <li>
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    <span href="#"> Upload de Palavras </span></li>
                </li>
                <li>
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    <span href="#"> Upload de Imagens </span></li>
                </li>
            </ul>
        </li>

    </ul>
    <div class="find-page">
        <input type="search" name="find" id="find" placeholder="Encontrar pagina">
            <span class="find">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
    </div>
</aside>
<form action="<?php echo $row['url'] . 'admin/upload' ?>" method="post" enctype=multipart/form-data hidden>
    <input type="file" name="arquivo" id="input_categoria" onchange="upload(event)">
    <input type="submit" id="enviar">
</form>

