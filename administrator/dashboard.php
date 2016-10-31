<?php require_once("php/variabili.php"); ?>
<?php require_once("php/template.php"); ?>
<?php require_once("php/utility.php"); ?>
<?php
session_start();
if (checkLogin($_POST)) {
    $_SESSION['user'] = $_POST['user'];
} else if (!isset($_SESSION['user'])) {
    header('Location: ' . $index);
    exit;
}
?>
<?php echo file_get_contents($header); ?>
<?php printNavbar() ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Medical Sangallo
                    <small>Dashboard</small>
                </h1>
                <!-- Tabella articoli in evidenza -->
                <div class="container-fluid">
                    <h3>Articoli in evidenza</h3>
                    <table class="table table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th>Posizione</th>
                            <th>Titolo</th>
                            <th>Categoria</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        printArticoliInEvidenza();
                        ?>
                        </tbody>
                    </table>
                </div>


                <?php
                printAllertMaxArticoli();
                ?>

                <!-- Tabella articoli NON in evidenza -->
                <div class="container-fluid">
                    <h3>Articoli</h3>
                    <table class="table table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th>Titolo</th>
                            <th>Data Creazione</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        printArticoliNotInEvidenza();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo file_get_contents($footer); ?>
