  <?php if(!isset($_SESSION)){
        session_start();
    }
            include_once 'includes/redirect.php';?>
    <?php   include_once 'includes/header.php';?>
    <?php   include_once 'includes/sidebar.php';?>
    <?php   include_once 'includes/helper.php';?>

    <div id="mainContent">
        <?php  $entrada= getEntrada($_GET['editar']); ?> 
        <h1>Editar entrada</h1>
        <form action="save_entries.php?entradaID=<?=$entrada['id']?>" method="POST">
            <!--TITULO-->
            <p><label for="title">Titulo</label></p>
            <input type="text" name="title" value="<?=$entrada['titulo']?>"/>
            <!--DESCRIPCION-->
            <p><label for="description">Descripcion</label></p>
            <textarea type="text" name="description"><?=$entrada['descripcion']?></textarea>
            <!--CATEGORIA-->
            <p><label for="category">Categoria</label></p>
            <?php $categorias= getCategoriesNames();?>
            <select name="category">
                <?php for($cont=0;$cont<count($categorias);$cont++):?>
                        <option value="<?=$categorias[$cont]?>"> <?=$categorias[$cont];?></option>
                <?php endfor;?>
            </select>
            <input type="submit" name="editar" value="editar"/>
        </form>
        
    </div>
        
        
    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 
