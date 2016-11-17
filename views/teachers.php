<?php include 'partials/header.php'; ?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/modules">Cursos</a></li>
            <li class="breadcrumb-item"><a href="/course?id=<?=$data->id?>"><?=$data->title?></a></li>
            <li class="breadcrumb-item active">Comenzar curso</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="schedule page">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-1">
                                <a href="/calendar" class="back">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                            </div>
                            <div class="col-md-10">
                                <h2 class="title">
                                    <div class="round-icon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                    Paso 2 de 3: Selecciona tu profesor
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <p class="text-xs-center">
                            A continuación encontrarás todos los profesores disponibles para dictar la primera clase de <a href="/course?id=<?=$data->id?>"><?=$data->title?></a> el martes 15 de mayo a las 16:00 hs.</p>
                        </p>
                        <div class="teachers">
                            <ul class="list-group">
                                <?php foreach ($data->teachers as $teacher): ?>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="media-object rounded-circle" src="<?=$config['assets_url']?>img/avatars/<?=$teacher->id?>.jpg">
                                            </div>
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h4 class="media-heading">
                                                            <a href="teachers/<?=$teacher->id?>">
                                                                <?=$teacher->name?>
                                                            </a>
                                                        </h4>
                                                        <span class="text-muted">
                                                            <?=$teacher->country?>
                                                        </span>
                                                        <div class="rating">
                                                            <?php for ($i = 0; $i < $teacher->rating; $i++): ?>
                                                                <i class="fa fa-star"></i>
                                                            <?php endfor; ?>
                                                        </div>
                                                        <p class="description">
                                                            <?=$teacher->description?>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="text-xs-center">
                                                            <h4 class="font-weight-bold">
                                                                u$s <?=$teacher->price?><sup>.00</sup>
                                                            </h4>
                                                            <p class="small text-muted">
                                                                por clase
                                                            </p>
                                                            <div>
                                                                <button class="btn btn-primary btn-block">
                                                                    Seleccionar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="text-xs-center">
                            <button type="button" class="btn btn-primary">Ver m&aacute;s...</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>