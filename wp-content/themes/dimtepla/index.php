<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dimtepla
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

            <section id="home">
                <div class="bg-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home.png">
                </div>
                <div id="home-info">
                    <h1>ЗІГРІЙСЯ З НАМИ</h1>
                    <div class="side-text">
                        <p>
                            Працює на різних видах палива <br>
                            У 4 рази економічніше газу.<br>
                            <br>
                            Високоякісне твердопаливне обладнання <br>
                            вітчизняного виробництва. <br>
                            Модельний ряд включає як моделі <br>
                            преміум сегменту, так і моделі, <br>
                            доступні для кожної родини. <br>
                        </p>
                    </div>
                </div>
            </section>
            <hr id="vertical-hr">
            <a name="to-catalog"></a>
            <section id="catalog">
                <div class="row">
                    <div class="col-5">
                        <div class="filter">
                            <h2>Каталог</h2>
                            <p>Площа для опалення</p>
                            <span class="area">100-150 м<sup>2</sup></span><br>
                            <span class="area">150-250 м<sup>2</sup></span><br>
                            <span class="area">250-350 м<sup>2</sup></span><br>
                            <p>Фильтр пошуку</p>

                            <span>Ціна, грн</span>
                            <br>

                            <div id="slider-container">
                                <div class="slider">
                                    <div class="bar" data-start="1000" data-end="5000">
                                        <div class="lp" data-pos="0.1"></div>
                                        <div class="rp" data-pos="0.8"></div>
                                    </div>
                                </div>
                            </div>

                            <span>Суха маса, кг</span>
                            <br>
                            <span>Обсяг води, л</span>
                            <br>
                            <span>Обсяг топки, дм<sup>3</sup></span>
                            <br>
                            <span>Показник ККД, %</span>
                            <br>

                            <div id="values-container">
                                <hr id="hr-left">
                                <span>159</span>
                                <br>
                                <span>90</span>
                                <br>
                                <span>100</span>
                                <br>
                                <span>92</span>
                                <br>
                                <hr id="hr-right">
                            </div>

                            <input type="button" value="Застосувати">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="tovar col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="cotel" src="<?php echo get_template_directory_uri();?>/assets/images/image1.png">
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            Неус-Вичлаз <br>
                                            2800 грн <br>
                                            38 кВт <br>
                                        </p>
                                        <a href="#">Детальніше</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="tovar col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="cotel" src="<?php echo get_template_directory_uri();?>/assets/images/image1.png">
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            Неус-Вичлаз <br>
                                            2800 грн <br>
                                            38 кВт <br>
                                        </p>
                                        <a href="#">Детальніше</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tovar col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="cotel" src="<?php echo get_template_directory_uri();?>/assets/images/image2.png">
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            Неус-Вичлаз <br>
                                            2800 грн <br>
                                            38 кВт <br>
                                        </p>
                                        <a href="#">Детальніше</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="tovar col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="cotel" src="<?php echo get_template_directory_uri();?>/assets/images/image2.png">
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            Неус-Вичлаз <br>
                                            2800 грн <br>
                                            38 кВт <br>
                                        </p>
                                        <a href="#">Детальніше</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tovar col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="cotel" src="<?php echo get_template_directory_uri();?>/assets/images/image3.png">
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            Неус-Вичлаз <br>
                                            2800 грн <br>
                                            38 кВт <br>
                                        </p>
                                        <a href="#">Детальніше</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="tovar col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="cotel" src="<?php echo get_template_directory_uri();?>/assets/images/image3.png">
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            Неус-Вичлаз <br>
                                            2800 грн <br>
                                            38 кВт <br>
                                        </p>
                                        <a href="#">Детальніше</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="reviews">
                <h3>Відгуки</h3>

                <div class="comment-container">
                    <div class="row">
                        <div class="review col-6">
                            <div class="reviews-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/3actor.png">
                                <p class="name">Joe Rogan</p>
                                <p>Все просто супер, отличный магазин. Установили быстро и чисто!</p>
                            </div>
                        </div>
                        <div class="review col-6">
                            <div class="reviews-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/2actor.png">
                                <p class="name">Stasy Monagan</p>
                                <p>Все хорошо, в доме теперь тепло и уютно.</p>
                            </div>
                        </div>
                        <div class="review col-6">
                            <div class="reviews-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/1actor.png">
                                <p class="name">Mat Donald</p>
                                <p>Спасибо, все отлично! Уже два сезона все работает без проблем.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="details">
                    <a href="#to-catalog">Перейти до товарів</a>
                    <hr class="details-hr">
                </div>
            </section>

            <section id="info">
                <a name="callback"></a>
                <div class="row">
                    <div class="col-6">
                        <p id="map-info">
                            Ми знаходимоcь за адресою: <br>
                            Покровск, <br>
                            вул. Залізнодорожна, 16 <br>
                        </p>
                        <div id="map">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/map.png">
                        </div>
                        <br>
                        <p id="email-info">
                            Example@gmail.com <br>
                            +380 0854 3 934
                        </p>
                    </div>
                    <div class="col-6">
                        <div id="callback">
                            <h4>Зворотний дзвінок</h4>
                            <input type="text" name="name" placeholder="ім'я">
                            <br>
                            <input type="text" name="phone" placeholder="номер">
                            <br>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/shield.png">
                            <p>
                                Дані користувача<br>
                                надійно захищені
                            </p>
                            <br>
                            <hr id="send-hr-top">
                            <input id="send-btn" type="button" value="Відправити">
                            <hr id="send-hr-bot">
                        </div>

                    </div>

                </div>
                <div id="back-to-top">
                    <a href="#top"> <img src="<?php echo get_template_directory_uri();?>/assets/images/to-top.png"> </a>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
