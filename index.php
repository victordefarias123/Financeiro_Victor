<?php
include_once("includes/topo.php");
include_once("includes/menu.php");

$consulta_sql = "SELECT sum(valor) as saldo FROM extrato";
$consulta_con = mysqli_query($conexao, $consulta_sql);
if (mysqli_num_rows($consulta_con)) {
    $consulta = mysqli_fetch_array($consulta_con);
}

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pagina Inicial</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo number_format($consulta['saldo'],2,",","."); ?></h3>

                        <p>Saldo atual</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="extrato.php" class="small-box-footer">Extrato <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include_once("includes/rodape.php"); ?>