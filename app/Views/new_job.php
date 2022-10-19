<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-3">
            <h3>TODO List</h3>

        </div>

        <div class="col text-right p-3">
            <h3>Nova Tarefa</h3>
        </div>
    </div>
</header>

<hr>

<?php
helper('form');
echo form_open('index.php/main/newjobsubmition');
?>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <label>Designação da Tarefa:</label>
            <div class="form-group">
                <input type="text" name="job_name" class="form-control">
            </div>
            <div class="row">
                <div class="col">
                    <a href="<?= site_url('index.php/main') ?>" class="btn btn-secondary">Cancelar</a>
                </div>
                <div class="col text-right">
                    <input type="submit" value="Gravar" class="btn btn-primary">
                </div>
            </div>


        </div>
    </div>
</div>


<?= form_close() ?>




<?= $this->endsection() ?>