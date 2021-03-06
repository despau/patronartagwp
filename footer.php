
        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">

            <!-- calling our own hook -->
            <?php do_action( 'wphooks_before_footer' ); ?>

            <h3><?php  bloginfo('name'); ?></h3>    
            &copy; <?php echo date('Y');?>

            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'patronartag' ) ); ?>">
                <?php printf( esc_html__( 'Proudly powered by %s', 'patronartag' ), 'WordPress' ); ?>
            </a>

        </footer>

    </div><!-- #page -->

    <?php wp_footer(); ?>

</body>
</html>
