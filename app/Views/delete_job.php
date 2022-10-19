<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<header class="container">
    <div class="row">
        <div class="col p-3">
            <h3>TODO List</h3>

        </div>

        <div class="col text-right p-3">
            <h3>Deletar Tarefa</h3>
        </div>
    </div>
</header>

<hr>

<!--  -->
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Deseja deletar a tarefa:</h3>
            <div class="card p-3 my-3 bg-light">
                <h4><?= $job->job ?></h4>


            </div>

        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <a href="<?= site_url('index.php/main') ?>" class="btn btn-secondary">Não</a>
            <a href="<?= site_url('index.php/main/deletejobconfirm/' . $job->id_job) ?>" class="btn btn-primary">Sim</a>



        </div>
    </div>
</div>



<?= $this->endsection() ?>