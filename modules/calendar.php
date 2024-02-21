<section class="section section--calendar">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="title">
                    <h1 class="h3">Calendario</h1>
                </div>
                <ul class="nav nav-tabs" id="tabPublications" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Todos-tab" data-bs-toggle="tab" data-bs-target="#Todos" type="button" role="tab" aria-controls="Todos" aria-selected="true">Todos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="en-curso-tab" data-bs-toggle="tab" data-bs-target="#en-curso" type="button" role="tab" aria-controls="en-curso" aria-selected="false">En curso</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Próximos-tab" data-bs-toggle="tab" data-bs-target="#Próximos" type="button" role="tab" aria-controls="Próximos" aria-selected="false">Próximos</button>
                    </li>
                </ul>
                <div class="tab-content" id="tabPublicationsContent">
                    <div class="tab-pane fade show active" id="documentos" role="tabpanel" aria-labelledby="documentos-tab">
                        <div class="grid grid--four">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                            <?php include('components/cards/card-events.php'); ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audios" role="tabpanel" aria-labelledby="audios-tab">
                        <div class="grid grid--four">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                            <?php include('components/cards/card-events.php'); ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                        <div class="grid grid--four">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                            <?php include('components/cards/card-events.php'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div id='calendar'>
                    aqui va el calendario
                </div>
            </div>
        </div>
    </div>
</section>