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
                <?php


                if (!isset($_POST['title'])) {
                    echo "EROROR";
                }

                $titolo = $_POST['title'];
                $sottotitolo = $_POST['subtitle'];
                $categoria = $_POST['category'];
                $testo = $_POST['articolo'];
                $nameFile = "";

                $path= "";
                if($_FILES['ufile']['name'] != "")
                {
                    $nameFile = str_replace(' ', '_', $titolo).".jpg";
                    $nameFile = strtolower($nameFile);
                    $path="../images/blog/".$nameFile;
                    if(!copy($_FILES['ufile']['tmp_name'], $path)){
                        header('Location: errorPage.php');
                    }

                }

                $query = 'UPDATE articolo set titolo = \'' . $titolo . '\', sottotitolo = \'' . $sottotitolo . '\', testo = \'' . trim($testo) . '\', categoria = \'' . $categoria . '\' where id=' . $_POST['id'];
                $db = new SQLite3('database/medicalSangallo.db');
                $db->exec($query);
                $db->close();
                ?>
                <h1>Aggiornamento articolo riuscito</h1>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<?php echo file_get_contents($footer);?>

