<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-3">
            <h3>TODO List</h3>

        </div>

        <div class="col text-right p-3">
            <h3>Editar Tarefa</h3>
        </div>
    </div>
</header>

<hr>

<?php
helper('form');
echo form_open('index.php/main/editjobsubmition');
?>

<input type="hidden" name="id_job" value="<?= $job->id_job ?>">
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <label>Designação da Tarefa:</label>
            <div class="form-group">
                <input type="text" name="job_name" class="form-control" value="<?= $job->job ?>">
            </div>
            <div class="row">
                <div class="col">
                    <a href="<?= site_url('index.php/main') ?>" class="btn btn-secondary">Cancelar</a>
                </div>
                <div class="col text-right">
                    <input type="submit" value="Atualizar" class="btn btn-primary">
                </div>
            </div>


        </div>
    </div>
</div>


<?= form_close() ?>




<?= $this->endsection() ?>