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
                    Medical Sangallo
                    <small>Modifica Articolo</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<?php echo file_get_contents($footer);?>
