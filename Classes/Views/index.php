<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta name="encoding" charset="utf-8">
        <title>Inicio | PHIS S.A.S</title>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <?php require_once('link_head.php'); ?>
    </head>
    <body>
        <section class="web animatedParent" data-sequence="700">
            <header class="full_head">
                <div class="bg_dark_full_head">
                    <section class="top_head">
                        <div class="box_logo_head">
                            <figure class="logo">
                                <?php require_once 'public/img/logo/logo.svg'; ?>
                            </figure>
                            <div class="txt_logo">
                                <div class="logo_title">
                                    PHIS S.A.S
                                </div>
                                <div class="logo_subtitle">
                                    Plazas hermanos inversiones
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mid_head">
                        <div class="ico_mid_head">
                            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_DVSwGQ.json" mode="bounce" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>

                        <div class="big_title_mid_head">
                            Automatización industrial y tecnologica
                        </div>

                        <div class="subtitle_top_mid_head">
                            Calidad, experiencia y eficiencia enfocada a soluciones
                        </div>

                        <div class="subtitle_mid_head">
                            Contamos con más de 10 años de experiencia en el sector y un equipo calificado para tu necesidad
                        </div>
                    </section>

                    <div class="box_waves_effect">
                        <svg viewbox="0 0 100 25">
                            <path fill="#FFFFFF" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                        </svg>
                    </div>
                </div>
            </header>

            <main class="full_main">
                <section class="web_section half_pc_section" id="innovacion">
                    <div class="small_section_title upper txt_center normal_green">
                        ¿Porqué elegirnos?
                    </div>

                    <div class="medium_section_title txt_center dark_blue">
                        Innovando la industria
                    </div>

                    <div class="lottie_section">
                        <dotlottie-player src="https://assets9.lottiefiles.com/dotlotties/dlf10_wpar4she.lottie" mode="bounce" background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <div class="normal_section_paragraph txt_center">
                        <p>Contamos con los mas altos estándares de calidad y seguridad para apoyar sus proyectos de automatización, montaje, traslados de planta y ampliaciones en general.</p>
                    </div>

                    <div class="button_section">
                        <button type="button" class="round_btn">
                            <a href="#" class="bg_dark_green">
                                Sobre Nosotros
                            </a>
                        </button>
                    </div>
                </section>

                <section class="web_section full_section bg_dark_violet" id="work">
                    <section class="web_section half_pc_section">
                        <div class="small_section_title upper neon_blue">
                            ¿Cómo lo hacemos?
                        </div>

                        <div class="medium_section_title white">
                            Integración de ingenieria
                        </div>

                        <div class="lottie_section">
                            <lottie-player src="https://assets4.lottiefiles.com/datafiles/K6S8jDtSdQ7EPjH/data.json" background="transparent" speed="0.4" autoplay loop></lottie-player>
                        </div>

                        <div class="quote_paragraph white">
                            <q>La integración de las diferentes disciplinas de la ingeniería  nos permite brindarle un portafolio integral de servicios, que le asegura el mas completo respaldo para el mantenimiento de sus equipos en cualquier area su compañia, ya sea a nivel industrial como tecnológico.</q>
                        </div>
                    </section>
                </section>

                <section class="web_section full_margin_section" id="servicios">
                    <div class="small_section_title upper neon_blue txt_center">
                        ¿Qué ofrecemos?
                    </div>

                    <div class="medium_section_title txt_center dark_blue">
                        Servicios creativos que importan
                    </div>

                    <div class="normal_section_paragraph txt_center">
                        <p>En PHIS nos enorgullecemos de nuestras soluciones para tu negocio.</p>
                    </div>

                    <div class="menu_list_section">
                        <ul class="flex wrap_flex">
                            <li>
                                <div class="flex wrap_flex">
                                    <div class="ico_menu_list_section">
                                        <img src="<?= URL; ?>public/img/ico/radar.png" alt="">
                                    </div>

                                    <div class="title_menu_list_section">
                                        Estudio de automatización
                                    </div>
                                </div>

                                <div class="paragraph_menu_list_section">
                                    Gracias a nuestros analistas especializados y equipo de última tecnología, podremos realizar un estudio que te permita conocer de que manera podrás automatizar tus procesos.
                                </div>
                            </li>

                            <li>
                                <div class="flex wrap_flex">
                                    <div class="ico_menu_list_section">
                                        <img src="<?= URL; ?>public/img/ico/mantenimiento.png" alt="">
                                    </div>

                                    <div class="title_menu_list_section">
                                        Mantenimiento Industrial
                                    </div>
                                </div>

                                <div class="paragraph_menu_list_section">
                                    Contamos con especialistas en eléctrica y metalmecánica los cuales realizarán el mantenimiento requerido a tu área industrial.
                                </div>
                            </li>

                            <li>
                                <div class="flex wrap_flex">
                                    <div class="ico_menu_list_section">
                                        <img src="<?= URL; ?>public/img/ico/mantenimiento_equipo.png" alt="">
                                    </div>

                                    <div class="title_menu_list_section">
                                        Mantenimiento de Equipos
                                    </div>
                                </div>

                                <div class="paragraph_menu_list_section">
                                    Realizamos mantenimientos correctivos y preventivos a cualquier equipo que disponga la empresa.
                                </div>
                            </li>

                            <li>
                                <div class="flex wrap_flex">
                                    <div class="ico_menu_list_section">
                                        <img src="<?= URL; ?>public/img/ico/reparar.png" alt="">
                                    </div>

                                    <div class="title_menu_list_section">
                                        Montajes y reparaciones
                                    </div>
                                </div>

                                <div class="paragraph_menu_list_section">
                                    En acero inoxidable para la industria de alimentos y farmacéutica.
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="web_section full_section bg_dark_blue" id="clientes">
                    <section class="max_slide_clients">

                        <div class="small_section_title upper neon_blue">
                            ¿Aún no te convencemos?
                        </div>

                        <div class="medium_section_title white">
                            Estos son nuestros clientes
                        </div>

                        <div class="slide_clients">
                            <div><img src="<?= URL; ?>public/img/clientes/01.jpg" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/02.jpg" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/03.jpg" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/04.jpg" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/05.jpg" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/06.jpg" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/07.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/08.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/09.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/10.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/11.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/12.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/13.png" alt="Cliente logo"></div>
                            <div><img src="<?= URL; ?>public/img/clientes/14.jpg" alt="Cliente logo"></div>
                        </div>
                    </section>
                </section>
            </main>

            <footer class="full_footer">
                <section class="web_section half_pc_section">
                    <div class="small_section_title upper txt_center normal_blue">
                        ¡Estamos listos para tenerte como cliente!
                    </div>

                    <div class="large_section_title txt_center">
                        Permitenos trabajar junto a ti
                    </div>

                    <div class="normal_section_paragraph txt_center">
                        <p>No dudes en <a href="" class="dark_blue">contactarnos</a>, estamos aquí para ayudarte y atender tus solicitudes.</p>
                    </div>

                    <div class="button_section">
                        <button type="button" class="round_btn">
                            <a href="#" class="bg_normal_blue">
                                Contacto
                            </a>
                        </button>
                    </div>
                </section>

                <section class="web_section full_section bg_dark_blue" style="margin-bottom: 0!important;">
                    <div class="menu_footer">
                        <ul>
                            <li>
                                <a href="<?= URL; ?>sobre_nosotros">
                                    Sobre nosotros
                                </a>
                            </li>
                            <li>
                                <a href="#innovacion">
                                    Innovación
                                </a>
                            </li>
                            <li>
                                <a href="#work">
                                    ¿Cómo trabajamos?
                                </a>
                            </li>
                            <li>
                                <a href="#servicios">
                                    Nuestros servicios
                                </a>
                            </li>
                            <li>
                                <a href="#clientes">
                                    Nuestros clientes
                                </a>
                            </li>
                            <li>
                                <a href="<?= URL; ?>contacto">
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="banner_copyright gray_paragraph txt_center">
                        <strong>&copy; <?= date('Y'); ?>. PHIS S.A.S. Todos los derechos reservados.</strong>
                    </div>
                </section>
            </footer>
        </section>
    </body>
    <script src="<?= URL; ?>public/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?= URL; ?>public/js/css3-animate-it.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
    <script>
        $(document).ready(function(){
            $('.slide_clients').slick({
                lazyLoad: 'ondemand',
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                variableWidth: true,
                accessibility: false,
                pauseOnHover: false,
            });
        });
    </script>
</html>
