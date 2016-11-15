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
            <li class="breadcrumb-item"><a href="/course?id=<?=$data->id?>"><?=$data->title?></a></li>
            <li class="breadcrumb-item active">Reservar clase</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <h2>
                    Paso 1: Selecciona el día y hora de tu primera clase
                </h2>
                <div class="calendar">
                    <table class="table">
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
                                                Si
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

<?php include 'partials/footer.php'; ?>