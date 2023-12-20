    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <?php the_custom_logo() ?>
                    <div class="description">
                        <p><?php echo get_field("footer_logo_bottom_text", "option"); ?></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <ul class="page-list">
                        <?php footer_nav_page(); ?>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <ul class="services-list">
                        <?php footer_nav_services(); ?>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <ul class="social-media">
                        <?php
                        if (have_rows('footer_social_media_icon', "option")) {
                            while (have_rows('footer_social_media_icon', "option")) {
                                the_row();
                        ?>
                                <li><a href="<?php echo get_sub_field("icon_link", "option") ?>"><img src="<?php echo get_sub_field("icon_image", "option") ?>" alt=""></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <p class="addresss"><?php echo get_field("footer_address", "option") ?></p>
                    <a href="tel:<?php echo get_field("footer_phone_number", "option") ?>" class="phone-number"><?php echo get_field("footer_phone_number", "option") ?></a>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p><?php echo get_field("copy_write_text", "option") ?></p>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><a href="<?php echo get_field("footer_bottom_terms_link", "option") ?>"><?php echo get_field("footer_bottom_terms_text", "option") ?></a></li>
                        <li><a href="<?php echo get_field("footer_bottom_privacy_policy_link", "option") ?>"><?php echo get_field("footer_bottom_privacy_policy_text", "option") ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    </body>

    </html>