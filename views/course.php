<?php include 'partials/header.php'; ?>

<div class="cover" style="background-image: url(<?=$config['assets_url']?>img/<?=$data->cover?>)">
    <div class="overlay">
        <div class="container">
            <?=$data->title?>
        </div>
    </div>
</div>

<div class="container">
    <div class="page">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/modules">Todos los cursos</a></li>
            <li class="breadcrumb-item active"><?=$data->title?></li>
        </ol>
    </div>
</div>

<?php include 'partials/footer.php'; ?>