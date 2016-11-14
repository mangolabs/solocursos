<?php include 'partials/header.php'; ?>

<div class="cover">
    <div class="overlay">
        <div class="container">
            Todos los cursos
        </div>
    </div>
</div>

<div class="container">
    <div class="page">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Todos los cursos</li>
        </ol>
        <?php foreach ($data as $module): ?>
            <div class="module <?=$module->slug?>">
                <h2 class="title">
                    <div class="icon">
                        <i class="fa fa-<?=$module->icon?>"></i>
                    </div>
                    <?=$module->name?>
                </h2>
                <?php foreach (array_chunk($module->courses, 3) as $row): ?>
                    <div class="row">
                        <?php foreach ($row as $course): ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-cover-top" style="background-image: url(<?=$config['assets_url']?>img/<?=$course->thumbnail?>)"></div>
                                    <div class="card-block">
                                        <h4 class="card-title">
                                            <a href="course?id=<?=$course->id?>">
                                                <?=$course->title?>
                                            </a>
                                        </h4>
                                        <p class="card-text">
                                            <span class="tag tag-default">
                                                Principiante
                                            </span>
                                            <small class="text-muted">
                                                &middot; <?=$course->classes_count?> clases
                                            </small>
                                        </p>
                                        <p class="card-text">
                                            <?=$course->description?>
                                        </p>
                                        <div class="teachers">
                                            <div class="avatars">
                                                <?php foreach ($course->featured_teachers as $teacher): ?>
                                                    <img src="<?=$config['assets_url']?>img/avatars/<?=$teacher->id?>.jpg">
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="meta">
                                                <small class="text-muted">
                                                    Dictado por
                                                    <a href="teachers/<?=$course->featured_teachers[0]->id?>">
                                                        <?=$course->featured_teachers[0]->name?>
                                                    </a>
                                                    <br>
                                                    y otros <?=($course->teachers_count - 1)?> profesores
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'partials/footer.php'; ?>