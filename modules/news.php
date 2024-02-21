<section class="section section__news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h2>Noticias</h2>
                </div>
                <div class="grid grid--three">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <?php include('components/cards/card-news.php'); ?>
                    <?php } ?>
                </div>
                <div class="button mt-5 d-flex align-items-center justify-content-center">
                    <a href="" class="btn btn--secondary">Todas las noticias
                        <i class="material-symbols-outlined">arrow_right_alt</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>