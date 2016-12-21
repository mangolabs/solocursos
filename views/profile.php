<?php include 'partials/header.php'; ?>

<div class="cover" style="background-image: url(<?=$config['assets_url']?>img/<?=$data->cover?>)">
    <div class="overlay">
        <div class="container">
            <?=$data->name?>
        </div>
    </div>
</div>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Mi perfil</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="page">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-cover-top" style="background-image: url(<?=$config['assets_url']?>img/teacher.jpg")></div>
                    <table class="table table-hash">
                        <tr>
                            <td>
                                Miembro desde
                            </td>
                            <td>
                                14 de enero de 2016
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Clases tomadas
                            </td>
                            <td>
                                30
                            </td>
                        </tr>
                        <!--<tr>
                            <td>
                                Clases dadas
                            </td>
                            <td>
                                43
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Precio por hora
                            </td>
                            <td>
                                <strong>u$s <?=$data->price?><sup>.00</sup></strong>
                            </td>
                        </tr>-->
                    </table>
                    <div class="card-block">
                        <a href="calendar" class="btn btn-primary btn-block btn-lg">
                            Editar perfil
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!--<ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#teacher" role="tab">
                            Como profesor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#student" role="tab">
                            Como alumno
                        </a>
                    </li>
                </ul>-->
                <div class="tab-content">
                    <!--<div class="tab-pane active" id="teacher" role="tabpanel">
                        <h2>
                            Clases a dar
                        </h2>
                    </div>-->
                    <div class="tab-pane active" id="student" role="tabpanel">
                        <h2>
                            En curso
                        </h2>
                        <div class="ongoing">
                            <div class="summary">
                                <div class="unit">
                                    <div class="name">
                                        Inglés inicial
                                    </div>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            Clases reservadas:
                                        </li>
                                        <li>
                                            <a href="#">
                                                1.1 Personal Pronouns
                                            </a>
                                            <span class="pull-right">
                                                14 de mayo, 15:00 hs.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                1.1 Personal Pronouns
                                            </a>
                                            <span class="pull-right">
                                                18 de mayo, 15:00 hs.
                                            </a>
                                        </li>
                                        <li>
                                            Siguiente clase:
                                        </li>
                                        <li>
                                            <a href="#">
                                                1.2 Possesive Pronouns
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm pull-right">
                                                Reservar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="summary">
                                <div class="unit">
                                    <div class="name">
                                        Italiano inicial
                                    </div>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            Clases reservadas:
                                        </li>
                                        <li>
                                            <a href="#">
                                                1.1 Lorem
                                            </a>
                                            <span class="pull-right">
                                                16 de agosto, 9:00 hs.
                                            </a>
                                        </li>
                                        <li>
                                            Siguiente clase:
                                        </li>
                                        <li>
                                            <a href="#">
                                                1.2 Ipsum
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm pull-right">
                                                Reservar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>