<?php
include_once("includes/topo.php");
include_once("includes/menu.php");
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Extrato</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class='col-sm-12'>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Extrato</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Tipo</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $consulta_sql = "SELECT * FROM extrato";
                                $consulta_con = mysqli_query($conexao, $consulta_sql);
                                if (mysqli_num_rows($consulta_con)) {
                                    while ($consulta = mysqli_fetch_array($consulta_con)) {
                                ?>
                                        <tr>
                                            <td><?php echo implode('/', array_reverse(explode('-', $consulta['data']))); ?></td>
                                            <td><?php if ($consulta['tipo'] == 'C') {
                                                    echo 'Receita';
                                                } else {
                                                    echo 'Despesa';
                                                } ?></td>
                                            <td style="color: <?= ($consulta['valor'] < 0) ? 'red' : 'green' ?>;">
                                                <?= number_format($consulta['valor'], 2, ",", ".") ?>
                                            </td>

                                            <td><?php echo $consulta['descricao']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>Sem lançamentos</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php
                                }
                                ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<?php include_once("includes/rodape.php"); ?>