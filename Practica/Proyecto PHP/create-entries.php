  <?php if(!isset($_SESSION)){
        session_start();
    }
            include_once 'includes/redirect.php';?>
    <?php   include_once 'includes/header.php';?>
    <?php   include_once 'includes/sidebar.php';?>

    <div id="mainContent">
           
        <h1>Ultimas entradas</h1>
        <p>
            Ingrese una nueva entrada.
        </p>

        <form action="save_entries.php" method="POST">
            <!--TITULO-->
            <p><label for="title">Titulo</label></p>
            <input type="text" name="title"/>
            <!--DESCRIPCION-->
            <p><label for="description">Descripcion</label></p>
            <textarea type="text" name="description"></textarea>
            <!--CATEGORIA-->
            <p><label for="category">Categoria</label></p>
            <?php $categorias= getCategoriesNames();?>
            <select name="category">
                <?php for($cont=0;$cont<count($categorias);$cont++):?>
                        <option value="<?=$categorias[$cont]?>"> <?=$categorias[$cont];?></option>
                <?php endfor;?>
            </select>
            <input type="submit" name="submit" value="submit"/>
        </form>
        
    </div>
        
        
    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 
