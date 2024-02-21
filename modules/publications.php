<section class="section section__publications">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h2>Publicaciones</h2>
                </div>
                <ul class="nav nav-tabs" id="tabPublications" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button" role="tab" aria-controls="documentos" aria-selected="true">Documentos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="audios-tab" data-bs-toggle="tab" data-bs-target="#audios" type="button" role="tab" aria-controls="audios" aria-selected="false">Audios</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="false">Videos</button>
                    </li>
                </ul>
                <div class="tab-content" id="tabPublicationsContent">
                    <div class="tab-pane fade show active" id="documentos" role="tabpanel" aria-labelledby="documentos-tab">
                        <div class="grid grid--three">
                            <?php for ($i = 0; $i < 9; $i++) { ?>
                            <?php include('components/cards/card-documents.php'); ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audios" role="tabpanel" aria-labelledby="audios-tab">
                        <div class="grid grid--three">
                            <?php for ($i = 0; $i < 9; $i++) { ?>
                            <?php include('components/cards/card-audios.php'); ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                        <div class="grid grid--three">
                            <?php for ($i = 0; $i < 9; $i++) { ?>
                            <?php include('components/cards/card-videos.php'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="button mt-5 d-flex align-items-center justify-content-center">
                    <a href="" class="btn btn--secondary">Todas las publicaciones
                        <i class="material-symbols-outlined">arrow_right_alt</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>