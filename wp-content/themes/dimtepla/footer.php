<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dimtepla
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="row">
            <div class="col-5">
                <ul id="social">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/fb.png"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/inst.png"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/vk.png"></a></li>
                </ul>
                <p>
                    +380 0854 3 934 <br>
                    +380 0854 3 934
                </p>
            </div>
            <div class="col-4">
                <img id="footer-logo" src="<?php echo get_template_directory_uri();?>/assets/images/footer-logo.png">
                <br>
                <h5>Designed by TOGA</h5>
            </div>

            <div class="col-3">
                <ul id="footer-menu">
                    <li><a href="#">teplydom@gmail.com</a></li>
                    <li><a href="#">Зворотний дзвінок</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Допомога</a></li>
                </ul>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
