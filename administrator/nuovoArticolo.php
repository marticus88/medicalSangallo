<?php require_once("php/variabili.php"); ?>
<?php require_once("php/template.php"); ?>
<?php
session_start();
if(isset($_SESSION['user'])){
} else{
    header('Location: '.$index);
    exit;
}
?>
<?php echo file_get_contents($header);?>
<?php printNavbar() ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Medical Sangallo Amministraizone
                    <small>Nuovo Articolo</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <form method="post" action="test.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="titolo">Titolo: </label>
                <input class="form-control" type="text" name="title" id="titolo" required="true">
                <p class="help-block">Inserisci il titolo del nuovo articolo.</p>
            </div>

            <div class="form-group">
                <label for="sottotitolo">Testo in anteprima: </label>
                <textarea class="form-control" id="sottotitolo" name="subtitle" rows="5"  required="true"></textarea>
                <p class="help-block">Inserisci il testo in anteprima per il nuovo articolo.</p>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria: </label>
                <select class="form-control" name="category" id="categoria">
                    <option>Fitness</option>
                    <option>Riabilitazione</option>
                    <option>Fisioterapia</option>
                </select>
                <p class="help-block">Scegli la categoria alla quale apparterrà il nuovo ariticolo.</p>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Immagine: </label>
                <input type="file" class="form-control-file" name="ufile" id="exampleInputFile" aria-describedby="fileHelp">
                <p class="help-block">Inserisci l'immagine di anteprima.</p>
            </div>


            <div class="form-group">
                <textarea id="summernote" name="articolo" required="true"></textarea>
            </div>
            <button type="submit">Salva</button>
        </form>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    minHeight: 350,

                });
            });
        </script>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<?php echo file_get_contents($footer);?>
