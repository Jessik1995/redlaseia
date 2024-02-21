<section class="section section__events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <h2>Próximos Eventos </h2>
                </div>
                <div class="grid grid--two">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <?php include('components/cards/card-events.php'); ?>
                    <?php } ?>
                </div>
                <div class="button mt-5 d-flex align-items-center justify-content-center">
                    <a href="" class="btn btn--secondary">Calendario de eventos
                        <i class="material-symbols-outlined">arrow_right_alt</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>