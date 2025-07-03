<?php
include_once("includes/topo.php");
include_once("includes/menu.php");
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar Lançamento</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Novo lançamento</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="funcao/salvar.php">
                            <div class="form-group">
                                <label for="datafinanceiro">Data:</label>
                                <input type="date" name="datafinanceiro" id="datafinanceiro" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tipofinanceiro">Tipo</label>
                                <select name="tipofinanceiro" id="tipofinanceiro" class="form-control" required>
                                    <option></option>
                                    <option value="C">Receita</option>
                                    <option value="D">Despesa</option>
                                </select>
                            </div>
                    
                            <div class="form-group">
                                <label for="valorfinanceiro">Valor:</label>
                                <input type="number" name="valorfinanceiro" id="valorfinanceiro" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="descricaofinanceiro">Descrição:</label>
                                <input type="text" name="descricaofinanceiro" id="descricaofinanceiro" class="form-control" required>
                            </div>

                            <input type="submit" value="salvar" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once("includes/rodape.php"); ?>