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
                        <h2 class="title">
                            <div class="round-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            Paso 1 de 3: Selecciona día y horario
                        </h2>
                    </div>
                    <div class="card-block">
                        <p class="text-xs-center">
                            Elege el día y horario en el que quieras tomar tu primera clase. Los horarios se muestran en tu hora local.
                        </p>
                        <div class="calendar">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Horario
                                        </th>
                                        <?php foreach ($data->dates as $date): ?>
                                            <th>
                                                <?=$date?>
                                            </th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data->hours as $hour): ?>
                                        <tr>
                                            <td>
                                                <?=$hour?>
                                            </td>
                                            <?php foreach ($data->dates as $date): ?>
                                                <td>
                                                    <?php if (in_array($hour, $data->availableDates->{$date}->availableHours)): ?>
                                                        <a href="/teachers" class="btn btn-primary">
                                                            Reservar
                                                        </a>
                                                    <?php endif; ?>
                                                </td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>