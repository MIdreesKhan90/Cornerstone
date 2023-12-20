<?php
/*
 * Template Name: Home Page
 */
get_header();
?>

<main class="page-wrapper">
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url(<?php echo get_field("hero_background_image") ?>);">
        <div class="container">
            <h1 class="page-title"><?php echo get_field("hero_title") ?></h1>
            <p><?php echo get_field("hero_sub_heading") ?></p>
        </div>
    </section>

    <!-- Specialty Section -->
    <section class="specialty-section">
        <div class="container">
            <h1 class="section-title"><?php echo get_field("specialty_title") ?></h1>
            <p>
                <?php echo get_field("specialty_description") ?>
            </p>
            <div class="specialty-list">
                <div class="row">
                    <?php
                    if (have_rows('specialty_card')) {
                        while (have_rows('specialty_card')) {
                            the_row();
                    ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="specialty-card" onclick="location.href='<?php echo get_sub_field("card_link"); ?>'">
                                    <img src="<?php echo get_sub_field("card_image"); ?>" alt="Map Icon">
                                    <p>
                                        <?php echo get_sub_field("card_text"); ?>
                                    </p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Accreditation Section -->
    <section class="accreditation-section">
        <div class="container">
            <h1 class="section-title"><?php echo get_field("accreditation_title") ?></h1>
            <div class="description">
                <p>
                    <?php echo get_field("accreditation_description") ?>
                </p>
            </div>
            <img src="<?php echo get_field("logo_image") ?>" alt="Accreditation Image">
        </div>
    </section>

    <!-- Virtual Section -->
    <section class="virtual-section">
        <div class="container">
            <h1 class="section-title"><?php echo get_field("section_title") ?></h1>
            <div class="section-video">
                <div class="video-image">
                    <img src="<?php echo get_field("video_image") ?>" class="img-fluid" alt="">
                    <button type="button" class="play-btn">
                        <img src="<?php echo get_field("play_icon_image") ?>" alt="">
                    </button>
                </div>
                <video controls="" playsinline="" webkit-playsinline="" id="VideoWorker-0" class="w-100">
                    <source src="<?php echo get_field("video_url") ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Difference Section -->
    <section class="difference-section">
        <div class="container">
            <h1 class="section-title"><?php echo get_field("difference_title") ?></h1>
            <div class="owl-carousel owl-theme">
                <?php
                if (have_rows('difference_list')) {
                    while (have_rows('difference_list')) {
                        the_row();
                ?>
                        <div class="item">
                            <div class="section-video">
                                <div class="video-image-1">
                                    <img src="<?php echo get_sub_field("carousel_video_image"); ?>" class="img-fluid" alt="">
                                    <button type="button" class="play-carousel">
                                        <img src="<?php echo get_sub_field("carousel_video_button"); ?>" alt="">
                                    </button>
                                </div>
                                <video controls="" playsinline="" webkit-playsinline="" class="w-100">
                                    <source src="<?php echo get_sub_field("carousel_video_link"); ?>" type="video/mp4">
                                </video>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section">
        <div class="container">
            <h1 class="section-title"><?php echo get_field("programs_title") ?></h1>
            <p><?php echo get_field("programs_sub_title") ?></p>
            <div class="programs-list">
                <div class="row">
                    <?php
                    if (have_rows('programs_card')) {
                        while (have_rows('programs_card')) {
                            the_row();
                    ?>
                            <div class="col-md-6">
                                <div class="programs-card">
                                    <img src="<?php echo get_sub_field("program_card_image"); ?>" alt="">
                                    <p><?php echo get_sub_field("program_text"); ?></p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h1 class="section-title"><?php echo get_field("faq_title") ?></h1>
            <div class="accordion" id="accordionExample">
                <?php if (have_rows('faq_according')) : ?>
                    <?php while (have_rows('faq_according')) : the_row(); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo get_row_index(); ?>">
                                <button class="accordion-button <?php echo get_row_index() > 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo get_row_index(); ?>">
                                    <?php the_sub_field('faq_title'); ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo get_row_index(); ?>" class="accordion-collapse collapse <?php echo get_row_index() === 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo get_row_index(); ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php the_sub_field('faq_description'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <h5><?php echo get_field("faq_sub_title") ?></h5>
            <div class="description">
                <p><?php echo get_field("faq_sb_description") ?></p>
            </div>
            <div class="button-list">
                <a href="<?php echo get_field("faq_button_link_one") ?>" class="btn primary-btn"><?php echo get_field("faq_button_text_one") ?></a>
                <a href="<?php echo get_field("faq_button_link_two") ?>" class="btn primary-btn"><?php echo get_field("faq_button_text_two") ?></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>