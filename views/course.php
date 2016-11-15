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
            <li class="breadcrumb-item"><a href="/modules">Cursos</a></li>
            <li class="breadcrumb-item"><a href="/modules"><?=$data->module->name?></a></li>
            <li class="breadcrumb-item active"><?=$data->title?></li>
        </ol>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-cover-top" style="background-image: url(<?=$config['assets_url']?>img/<?=$data->thumbnail?>)"></div>
                    <table class="table table-hash">
                        <tr>
                            <td>
                                Clases
                            </td>
                            <td>
                                <?=$data->classes_count?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nivel
                            </td>
                            <td>
                                <span class="tag tag-default">
                                    Principiante
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Profesores disponibles
                            </td>
                            <td>
                                <?=$data->teachers_count?>
                            </td>
                        </tr>
                    </table>
                    <div class="card-block">
                        <a href="#" class="btn btn-primary btn-block btn-lg">
                            Comenzar Curso
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="course">
                    <p>
                        <?=$data->description?>
                    </p>
                    <p>In this course you'll build on that foundation as you learn how to turn Craft CMS into one of the most widely used types of site: a blog. We’ll step through how to set up all the most common features you’re used to from popular blogging platforms.</p>
                    <p>So let's go ahead and start learning!</p>
                </div>
                <div class="summary">
                    <?php foreach ($data->units as $unitIndex => $unit): ?>
                        <div class="unit">
                            <div class="name">
                                <?=($unitIndex + 1)?>. <?=$unit->name?>
                                <span class="count">
                                    <?=count($unit->lessons)?> clases
                                </span>
                            </div>
                            <ul class="nav nav-pills nav-stacked">
                                <?php foreach ($unit->lessons as $lessonIndex => $lesson): ?>
                                    <li>
                                        <a href="#">
                                            <?=($unitIndex + 1)?>.<?=($lessonIndex + 1)?> <?=$lesson->title?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>