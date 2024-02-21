<section class="section section--map bg-secondary-10 p-58">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section--map__content">
                    <figure>
                        <img src="<?php echo $host_link ?>/build/img/logo-redlaseia.svg" alt="">
                    </figure>
                    <h2>Países Miembros</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <ul class="countries">
                        <li class="argentina">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/argentina.svg" alt="">
                            </button>
                        </li>
                        <li class="brasil">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/brasil.svg" alt="">
                            </button>
                        </li>
                        <li class="chile">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/chile.svg" alt="">
                            </button>
                        </li>
                        <li class="colombia">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/colombia.svg" alt="">
                            </button>
                        </li>
                        <li class="mexico">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/mexico.svg" alt="">
                            </button>
                        </li>
                        <li class="costaRica">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/costaRica.svg" alt="">
                            </button>
                        </li>
                        <li class="ecuador">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/ecuador.svg" alt="">
                            </button>
                        </li>
                        <li class="peru">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/peru.svg" alt="">
                            </button>
                        </li>
                        <li class="uruguay">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/uruguay.svg" alt="">
                            </button>
                        </li>
                        <li class="paraguay">
                            <button data-bs-toggle="modal" data-bs-target="#modalCountrie">
                                <img src="<?php echo $host_link ?>/build/img/countries/paraguay.svg" alt="">
                            </button>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="section--map__vector">
                    <?php include('components/map/map.php'); ?>
                </div>

            </div>
        </div>
    </div>
</section>